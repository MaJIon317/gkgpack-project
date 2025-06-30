<?php

namespace App\Http\Livewire;

use App\Http\Requests\OrderStoreRequest;
use App\Http\Requests\OrderUpdateRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use LivewireUI\Modal\ModalComponent;

class OrderForm extends ModalComponent
{
    public Order|null $order = null;

    public int|null $user_id = null;

    public string $name = '';

    public string $barcode = '';

    public string $note = '';

    public string $search = '';

    public Collection $warehouses;

    public Collection $searchResults;

    public Collection $products;

    public bool $completed = false;

    public ?Collection $selectedProducts = null;

    public $data = [];

    public function selectedProductsNull()
    {
        $this->selectedProducts = null;
    }

    public function mount()
    {
        $this->user_id = $this->order->user_id ?? $this->user_id;
        $this->name = $this->order->name ?? $this->name;
        $this->barcode = $this->order->barcode ?? $this->barcode;
        $this->note = $this->order->note ?? $this->note;

        $this->warehouses = Warehouse::all();

        $this->searchResults = collect([]);

        $this->products = collect([]);

        if ($this->order) {
            foreach($this->order->products as $product) {
                $this->addProduct($product->product, $product->warehouse_id, $product->qty, $product->collected, $product->id);
            }
        }

        $this->completed = $this->order?->status === 'completed';
    }

    public function store()
    {
        $rules = new OrderStoreRequest;

        $validated = $this->validate($rules->rules());

        $this->order = Order::create($validated);

        $this->updateProducts();

        $this->closeModal();

        $this->dispatch('toast', message: __('The order has been created, now add the products'));
    }

    public function update()
    {
        $rules = new OrderUpdateRequest;

        $rules->order = $this->order;

        $validated = $this->validate($rules->rules());

        $this->order->update($validated);

        $this->updateProducts();

        $this->closeModal();

        $this->dispatch('toast', message: __('Saved successfully'));
    }

    private function updateProducts()
    {
        $this->order->products()->delete();

        if ($this->products) {
            foreach($this->products as $product) {
                $this->order->products()->create([
                    'product_id' => $product->id,
                    'warehouse_id' => ((int) $this->data[$product->id]['warehouse_id'] ?? Warehouse::first()->id),
                    'qty' => ((int) $this->data[$product->id]['qty'] ?? 1),
                    'collected' => $this->data[$product->id]['collected'] ?? false
                ]);
            }
        }
    }

    public function searchProducts()
    {
        $exclude = [];

        if ($this->order) {
            foreach($this->order->products as $product) {
                $exclude[] = $product->product->sku;
            }
        }

        $this->searchResults = Product::whereNotIn('sku', $exclude)
            ->where(function (Builder $query) {
                $query->where('name', 'like', "%{$this->search}%")
                    ->orWhere('sku', 'like', "%{$this->search}%")
                    ->orWhere('barcode', 'like', "%{$this->search}%");
            })
            ->limit(15)
            ->get();
    }

    public function searchBarcode(string $barcode): void
    {
        $products = Product::where('barcode', $barcode)->get();

        if ($products->count()) {
            if ($products->count() > 1) {
                $this->js('scannerDisconnect()');

                $this->selectedProducts = $products;
            } else {
                $this->addProduct($products->first());

                $this->dispatch('toast', message: __('Product added'));
            }
        } else {
            $this->dispatch('toast', message: __('Product not found'), type: 'error');
        }
    }

    public function addProduct(Product $product, int $warehouse_id = 0, int $qty = 1, $collected = false, int $order_product_id = 0)
    {
        $productAvailability = $this->products->where('id', $product->id)->first();

        if ($productAvailability) {
            $this->data[$product->id]['qty'] = (int)($this->data[$product->id]['qty'] ?? 1) + (int)$qty;
        } else {
            $this->products->push($product);

            $this->data[$product->id] = [
                'order_product_id' => $order_product_id,
                'warehouse_id' => $this->data[$product->id]['warehouse_id'] ?? ($warehouse_id ?: Warehouse::first()->id),
                'qty' => $this->data[$product->id]['qty'] ?? $qty,
                'collected' => $collected,
            ];
        }

        $this->search = '';

        $this->searchResults = collect([]);

        $this->selectedProductsNull();
    }

    public function delete(Product $product)
    {
        if (isset($this->data[$product->id])) {
            unset($this->data[$product->id]);
        }

        foreach($this->products->where('id', $product->id)->keys() as $key) {
            $this->products->forget($key);
        }

        $this->search = '';

        $this->searchResults = collect([]);
    }

    public function render()
    {
        return view('orders.form');
    }
}
