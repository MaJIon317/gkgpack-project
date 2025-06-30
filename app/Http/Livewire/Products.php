<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Component;

class Products extends Component
{
    use WithPagination;

    public function delete(Product $product): void
    {
        if ($product->orders()->count() === 0) {
            $product->delete();

            $this->dispatch('toast', message: __('Successfully deleted'));
        } else {
            $this->dispatch('toast', message: __('You cannot delete an item because it has already been added to the order'), type: 'error');
        }
    }

    #[On('echo:products,ProductEvent')]
    public function render(): View
    {
        $products = Product::orderByDesc('created_at')->paginate();

        return view('products.index', compact('products'))
            ->title(__('Products'));
    }
}
