<?php

namespace App\Http\Livewire;

use App\Http\Requests\WarehouseRegistrationStoreRequest;
use App\Http\Requests\WarehouseRegistrationUpdateRequest;
use App\Models\Product;
use App\Models\Warehouse;
use App\Models\WarehouseRegistration;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;
use LivewireUI\Modal\ModalComponent;

class WarehouseRegistrationForm extends ModalComponent
{
    public WarehouseRegistration|null $warehouseRegistration = null;

    public $warehouse_id;

    public string $note = '';

    public string $search = '';

    public Product|null $product = null;

    public Collection $warehouses;

    public Collection $searchResults;

    public Collection $products;

    public $data = [];

    public ?Collection $selectedProducts = null;

    public function selectedProductsNull()
    {
        $this->selectedProducts = null;
    }

    /**
     * Supported: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
     */
    public static function modalMaxWidth(): string
    {
        return '4xl';
    }

    public function mount()
    {
        $this->warehouses = Warehouse::all();

        $this->warehouse_id = $this->warehouseRegistration->warehouse_id ?? $this->warehouses->first()->id;
        $this->note = $this->warehouseRegistration->note ?? $this->note;
        $this->data = $this->warehouseRegistration->data ?? $this->data;

        $this->products = collect([]);

        if ($this->product) {
            $this->addProduct($this->product);
        }

        if ($this->warehouseRegistration) {
            foreach($this->warehouseRegistration->products()->where('qty', '>', 0)->get() as $product) {
                $this->addProduct($product->product, $product->qty);
            }
        }

        $this->searchResults = collect([]);
    }

    public function store()
    {
        $rules = new WarehouseRegistrationStoreRequest;

        $validated = $this->validate($rules->rules());

        $this->warehouseRegistration = WarehouseRegistration::create($validated);

        $this->updateProducts();

        $this->dispatch('toast', message: __('Completed successfully'));

        $this->closeModal();
    }

    public function update()
    {
        $rules = new WarehouseRegistrationUpdateRequest;

        $rules->warehouseRegistration = $this->warehouseRegistration;

        $validated = $this->validate($rules->rules());

        $this->warehouseRegistration->update($validated);

        $this->updateProducts();

        $this->dispatch('toast', message: __('Saved successfully'));

        $this->closeModal();
    }

    private function updateProducts()
    {
        $this->warehouseRegistration->products()->delete();

        if ($this->products) {
            foreach($this->products as $product) {
                $this->warehouseRegistration->products()->create([
                    'product_id' => $product->id,
                    'warehouse_id' => $this->warehouse_id,
                    'warehouse_registration_id' => $this->warehouseRegistration->id,
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

    public function addProduct(Product $product, int $qty = 1)
    {
        $productAvailability = $this->products->where('id', $product->id)->first();

        if ($productAvailability) {
            $this->data[$product->id]['qty'] = (int)($this->data[$product->id]['qty'] ?? 1) + (int)$qty;
        } else {
            $this->products->push($product);

            $this->data[$product->id] = [
                'qty' => $this->data[$product->id]['qty'] ?? $qty,
                'section' => $product->section
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

    public function updateSection(Product $product, $value): void // C122839134
    {
        $product->update([
            'section' => $value
        ]);
    }

    public function render()
    {
        return view('warehouse-registrations.form');
    }
}
