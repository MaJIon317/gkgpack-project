<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Component;

class Products extends Component
{
    use WithPagination;

    public function delete(Product $product)
    {
        $product->delete();

        $this->dispatch('toast', message: __('Successfully deleted'));
    }

    #[On('echo:products,ProductEvent')]
    public function render()
    {
        $products = Product::orderByDesc('created_at')->paginate();

        return view('products.index', compact('products'))
            ->title(__('Products'));
    }
}
