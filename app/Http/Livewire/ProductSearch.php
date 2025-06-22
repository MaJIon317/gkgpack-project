<?php

namespace App\Http\Livewire;

use App\Models\Product;
use LivewireUI\Modal\ModalComponent;

class ProductSearch extends ModalComponent
{
    public array $productIds = [];

    public array $products = [];

    public function mount(): void
    {
        foreach ($this->productIds as $productId) {
            if ($product = Product::find($productId)) {
                $this->products[$productId] = $product;
            }
        }
    }

    /**
     * Supported: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
     */
    public static function modalMaxWidth(): string
    {
        return 'md';
    }

    public function render()
    {
        return view('products.search');
    }
}
