<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;

class UploadImageProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upload-image-product {path}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $pathes = Storage::allFiles($this->argument('path'));

        foreach ($pathes as $path) {
            $mime = Storage::mimeType($path);

            if (in_array($mime, ['image/jpg', 'image/jpeg', 'image/png'])) {
                $key = pathinfo($path, PATHINFO_FILENAME);
                $ext = pathinfo($path, PATHINFO_EXTENSION);

                $product = Product::where('barcode', $key)->orWhere('sku', $key)->first();

                if ($product) {
                    $fullPath = Storage::path($path);

                    $product->images()->delete();

                    optimize_image($fullPath);

                    $name = md5($key);
                    $newPath = "images/products/{$name}.{$ext}";

                    Storage::move($path, $newPath);

                    $product->images()->create([
                        'path' => $newPath
                    ]);
                }
            }
        }

        Storage::delete($pathes);
    }
}
