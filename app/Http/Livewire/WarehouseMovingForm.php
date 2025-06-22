<?php

namespace App\Http\Livewire;

use App\Http\Requests\WarehouseMovingStoreRequest;
use App\Http\Requests\WarehouseMovingUpdateRequest;
use App\Models\Product;
use App\Models\Warehouse;
use App\Models\WarehouseMoving;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;
use LivewireUI\Modal\ModalComponent;

class WarehouseMovingForm extends ModalComponent
{
    public WarehouseMoving|null $warehouseMoving = null;

    public $from_warehouse_id;

    public $to_warehouse_id;

    public string $note = '';

    public string $search = '';

    public Collection $warehouses;

    public Collection $searchResults;

    public Collection $products;

    public $data = [];

    public function mount()
    {
        $this->warehouses = Warehouse::all();

        $this->from_warehouse_id = $this->warehouseMoving->from_warehouse_id ?? $this->warehouses->first()->id;
        $this->to_warehouse_id = $this->warehouseMoving->to_warehouse_id ?? $this->warehouses->last()->id;
        $this->note = $this->warehouseMoving->note ?? $this->note;
        $this->data = $this->warehouseMoving->data ?? $this->data;

        $this->products = collect([]);

        if ($this->warehouseMoving) {
            foreach($this->warehouseMoving->products()->where('qty', '>', 0)->get() as $product) {
                $this->addProduct($product->product, $product->qty);
            }
        }

        $this->searchResults = collect([]);
    }

    public function store()
    {
        $rules = new WarehouseMovingStoreRequest;

        $validated = $this->validate($rules->rules());

        $this->warehouseMoving = WarehouseMoving::create($validated);

        $this->updateProducts();

        $this->closeModal();

        $this->dispatch('toast', message: __('Completed successfully'));
    }

    public function update()
    {
        $rules = new WarehouseMovingUpdateRequest;

        $rules->warehouseMoving = $this->warehouseMoving;

        $validated = $this->validate($rules->rules());

        $this->warehouseMoving->update($validated);

        $this->updateProducts();

        $this->closeModal();

        $this->dispatch('toast', message: __('Saved successfully'));
    }

    private function updateProducts()
    {
        $this->warehouseMoving->products()->delete();

        if ($this->products) {
            foreach($this->products as $product) {
                $this->warehouseMoving->products()->create([
                    'product_id' => $product->id,
                    'warehouse_id' => $this->from_warehouse_id,
                    'warehouse_moving_id' => $this->warehouseMoving->id,
                    'qty' => -((int) $this->data[$product->id]['qty'] ?? 1),
                ]);

                $this->warehouseMoving->products()->create([
                    'product_id' => $product->id,
                    'warehouse_id' => $this->to_warehouse_id,
                    'warehouse_moving_id' => $this->warehouseMoving->id,
                    'qty' => ((int) $this->data[$product->id]['qty'] ?? 1),
                ]);
            }
        }
    }

    public function searchProducts()
    {
        $exclude = [];

        foreach($this->products as $product) {
            $exclude[] = $product->sku;
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
        $product = Product::where('barcode', $barcode)->first();

        if ($product) {
            $this->addProduct($product, 1);

            $this->dispatch('toast', message: __('Product added'));
        } else {
            $this->dispatch('toast', message: __('Product not found'), type: 'error');
        }
    }

    public function addProduct(Product $product, int $qty = 1)
    {
        $productAvailability = $this->products->where('id', $product->id)->first();

        if ($productAvailability) {
            $this->data[$product->id]['qty'] = (int)($this->data[$product->id]['qty'] ?? 1) + (int)$qty;
        } else {
            $this->products->push($product);

            $this->data[$product->id] = [
                'qty' => $this->data[$product->id]['qty'] ?? $qty,
            ];
        }

        $this->search = '';

        $this->searchResults = collect([]);
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
        return view('warehouse-movings.form');
    }
}
