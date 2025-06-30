<?php

namespace App\Http\Livewire;

use App\Http\Requests\ProductDeleteRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
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

    public function deleteProduct(Product $product): void
    {
        if (!$product->orders()->exists()) {
            $product->delete();

            $this->dispatch('toast', message: __('The product was successfully deleted'));

            $this->closeModal();
        } else {
            $this->dispatch('toast', message: __('You can\'t delete the product, it has already been used in orders.'), type: 'error');
        }
    }

    public function render(): View
    {
        return view('products.search');
    }
}
