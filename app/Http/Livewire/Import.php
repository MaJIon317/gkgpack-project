<?php

namespace App\Http\Livewire;

use ZipArchive;
use Exception;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use App\Imports\ProductsImport;
use App\Imports\OrdersImport;
use Maatwebsite\Excel\Validators\ValidationException;
use App\Models\Import as ImportModel;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use LivewireUI\Modal\ModalComponent;

class Import extends ModalComponent
{
    use WithPagination, WithFileUploads;

    public $key = 'product';

    public $accept = '.xls,.xlsx';

    public $acceptKeys = [
        'product' => '.xls,.xlsx',
        'product-image' => '.zip,.rar,.7zip',
        'order' => '.xls,.xlsx',
    ];

    public $files = [];

    public $processFile;

    public function mount()
    {
        $this->accept = $this->acceptKeys[$this->key] ?? $this->accept;
    }

    public function updatedFiles()
    {
        foreach ($this->files as $file) {
            ImportModel::create([
                'user_id' => auth()->user()->id,
                'key' => $this->key,
                'name' => $file->getClientOriginalName(),
                'path' => $file->store(path: "import/{$this->key}"),
                'size' => $file->getSize(),
            ]);
        }

        $this->files = [];

        $this->dispatch('toast', message: __('The files is uploaded'));
    }

    public function log(ImportModel $import)
    {
        return response()->streamDownload(function () use($import) {
            echo json_encode($import->decision, JSON_PRETTY_PRINT);
        }, 'import.txt');
    }

    public function download(ImportModel $import)
    {
        $this->dispatch('toast', message: __('Not implemented'));
    }

    public function import(ImportModel $import)
    {
        $camel = Str::camel('import-' . $this->key);

        if (method_exists($this, $camel)) {
            $decision = $this->{$camel}($import, storage_path("app/public/{$import->path}"));

            $import->update([
                'done' => true,
                'decision' => $decision
            ]);

            if (isset($decision['errors']) && !empty($decision['errors'])) {
                $this->dispatch('toast', message: __('Import error'), type: 'error');
            } else {
                $this->dispatch('toast', message: __('Import completed'));
            }
        } else {
            $this->dispatch('toast', message: __('The method is unavailable'), type: 'error');
        }
    }

    public function importProduct(ImportModel $import, $path)
    {
        $errors = [];

        try {
            (new ProductsImport)->import($import->path);
        } catch (ValidationException $e) {
            $failures = $e->failures();

            foreach ($failures as $failure) {
                $errors[$failure->row()] = $failure->errors();
            }
        }

        return [
            'errors' => $errors
        ];
    }

    public function importOrder(ImportModel $import, $path)
    {
        $errors = [];

        try {
            (new OrdersImport)->import($import->path);
        } catch (ValidationException $e) {
            $failures = $e->failures();

            foreach ($failures as $failure) {
                $errors[$failure->row()][] = $failure->errors();
            }
        }

        return [
            'errors' => $errors
        ];
    }

    public function importProductImage(ImportModel $import, $path)
    {
        $errors = [];
        $success = [];

        try {
            $zip = new ZipArchive();
            $zip->open($path, ZipArchive::CREATE);

            $file_count = $zip->count();
            $file_delete = 0;

            for($i = 0; $i < $file_count; $i++) {
                $file_name = $zip->getNameIndex($i);

                if (!preg_match('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $file_name, $matches)) {
                    $zip->deleteName($file_name);
                    $file_delete++;
                }
            }

            $zip->extractTo(storage_path('app/public/import/product-image'));

            $zip->close();

            Artisan::call('upload-image-product "import/product-image"');

            $success = [
                __('Total files') => $file_count,
                __('Deleted files') => $file_delete,
                __('Sent for processing') => $file_count - $file_delete
            ];
        } catch (Exception $e) {
            $errors[] = $e->getMessage();
        }

        return [
            'errors' => $errors,
            'success' => $success,
        ];
    }

    public function render()
    {
        $imports = ImportModel::where('key', $this->key)->orderBy('done')->orderByDesc('created_at')->paginate();

        return view('import', compact('imports'));
    }
}
