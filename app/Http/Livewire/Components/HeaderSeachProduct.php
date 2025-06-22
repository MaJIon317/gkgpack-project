<?php

namespace App\Http\Livewire\Components;

use App\Models\Product;
use App\Models\Order;
use App\Enums\OrderStatuses;
use Illuminate\Support\Collection;
use Livewire\Component;

class HeaderSeachProduct extends Component
{
    public $user;

    public string $search = '';

    public Collection $searchResults;

    public Collection $products;

    public function mount()
    {
        $this->user = auth()->user();

        $this->translate();
    }

    public function translate()
    {
        $this->products = collect([]);

        $this->searchResults = collect([]);

        $this->search = '';
    }

    public function searchProducts()
    {
        $this->searchBarcode();
    }

    public function searchBarcode(string|null $search = null): void
    {
        $search = $search ? $search : $this->search;

        if ($productIds = Product::select('id')
                ->whereAny([
                    'name',
                    'barcode',
                    'sku',
                ], 'like', "%{$search}%")->pluck('id')->toArray()) {

            $this->dispatch('scannerReset');

            $this->dispatch('openModal', component: 'product-search', arguments: ['productIds' => $productIds]);

            $this->translate();
        } elseif ($order = Order::where('barcode', $search)->orWhere('name', $search)->first()) {
            $this->dispatch('scannerReset');

            if ($this->user->hasRole('importer')) {
                $order->update([
                    'user_id' => $this->user->id,
                    'status' => OrderStatuses::PROCESSING,
                ]);

                $this->dispatch('openModal', component: 'order-collect', arguments: ['order' => $order]);
            } else {
                $this->dispatch('openModal', component: 'order-form', arguments: ['order' => $order]);
            }

            $this->translate();
        } else {
            $this->dispatch('toast', message: __('Not found'), type: 'error');
        }
    }

    public function render()
    {
        return view('components.header-seach-product');
    }
}
