<?php

namespace App\Http\Livewire;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Product;
use App\Models\Warehouse;
use App\Models\WarehouseRegistration;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class ProductForm extends ModalComponent
{
    use WithFileUploads;

    public Product|null $product = null;

    public $images = [];

    public $imageup = null;

    public string $name = '';

    public string $sku = '';

    public string $barcode = '';

    public string $section = '';

    public $warehouses;

    public $stocks = [];

    /**
     * Supported: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
     */
    public static function modalMaxWidth(): string
    {
        return '7xl';
    }

    public function mount()
    {
        if (isset($this->product->images)) {
            foreach($this->product->images as $image) {
                $this->images[] = $image;
            }
        }

        $this->name = $this->product->name ?? $this->name;
        $this->sku = $this->product->sku ?? fake()->sku(prefix: 'SKU-');
        $this->barcode = $this->product->barcode ?? $this->barcode;
        $this->section = $this->product->section ?? $this->section;

        $this->warehouses = Warehouse::all();
    }

    public function store()
    {
        $rules = new ProductStoreRequest;

        $validated = $this->validate($rules->rules());

        $this->product = Product::create($validated);

        $this->updateImage();

        $this->updateStocks();

        $this->closeModal();

        $this->dispatch('toast', message: __('Completed successfully'));
    }

    public function update()
    {
        $rules = new ProductUpdateRequest;

        $rules->product = $this->product;

        $validated = $this->validate($rules->rules());

        $this->product->update($validated);

        $this->updateImage();

        $this->closeModal();

        $this->dispatch('toast', message: __('Saved successfully'));
    }

    public function uploadImage()
    {
        $validator = Validator::make($this->imageup, [
            '*' => 'image|max:5120',
        ]);

        if ($validator->fails()) {
            $this->dispatch('toast', message: implode('<br>', $validator->errors()->all()), type: 'error');
        }

        $validateds = $validator->valid();

        $images = [];

        foreach($validateds as $image) {
            optimize_image($image->getPathname());

            $images[] = $image;
        }

        $this->images = array_merge($this->images, $images);

        $this->imageup = null;
    }

    public function removeImage($image)
    {
        unset($this->images[$image]);
    }

    private function updateImage()
    {
        $this->product->images()->delete();

        foreach($this->images as $image) {
            $this->product->images()->create([
                'product_id' => $this->product->id,
                'path' => $image->path ?? $image->store(path: 'images/products')
            ]);
        }
    }

    private function updateStocks()
    {
        if ($this->stocks) {
            foreach($this->stocks as $warehouse_id => $qty) {
                $warehouse_registraion = WarehouseRegistration::create([
                    'note' => 'CreateProduct',
                    'warehouse_id' => $warehouse_id,
                    'data' => [
                        $this->product->id => [
                            'qty' => $qty,
                        ],
                    ],
                ]);

                $this->product->stocks()->create([
                    'warehouse_id' => $warehouse_id,
                    'warehouse_registration_id' => $warehouse_registraion->id,
                    'qty' => $qty,
                ]);
            }
        }
    }

    public function barcodeGenerator()
    {
        $this->barcode = fake()->ean13();
    }

    public function render()
    {
        return view('products.form');
    }
}
