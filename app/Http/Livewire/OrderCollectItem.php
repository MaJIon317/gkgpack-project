<?php

namespace App\Http\Livewire;

use App\Models\OrderProduct;
use Livewire\Component;

class OrderCollectItem extends Component
{
    public OrderProduct $orderProduct;

    // Собран ли товар
    public bool $collected = false;

    // Количество собранных товаров
    public int $collectedQty = 0;

    public array $errors = [];

    protected $listeners = [
        'orderCollectItem'
    ];

    public function orderCollectItem(OrderProduct $orderProduct): void
    {
       // $this->orderProduct = $orderProduct;
    }

    public function mount(): void
    {
        $this->validated();
    }

    public function updatedCollected()
    {
        $this->orderProduct->update([
            'collected' => $this->collected,
            'collectedQty' => $this->collected ? $this->orderProduct->qty : 0
        ]);

        $this->js('scannerDisconnect()');

        $this->validated();
    }

    public function validated(): void
    {
        if ($this->orderProduct->collectedQty > $this->orderProduct->qty) {
            $this->errors['qty'] = __('You have collected the wrong amount of goods');
        } elseif (isset($this->errors['qty'])) {
            unset($this->errors['qty']);
        }

        if ($this->errors) {
            $this->js('scannerDisconnect()');
        }

        $this->dispatch('orderCollectParent', $this->orderProduct, $this->errors);
    }

    public function searchBarcode(string $barcode): void
    {
        if ($barcode === $this->orderProduct->product->barcode) {
            $this->orderProduct->collectedQty++;

            if ($this->orderProduct->collectedQty === $this->orderProduct->qty) {
                $this->orderProduct->collected = true;

                $this->js('scannerDisconnect()');
            }

            $this->orderProduct->save();
        } else {
            $this->dispatch('toast', message: __('Product not found'), type: 'error');
        }

        $this->validated();
    }

    // Решение ошибок
    public function allowedErrorQty(): void
    {
        $this->orderProduct->update([
            'collectedQty' => $this->orderProduct->qty
        ]);

        if (isset($this->errors['qty'])) {
            unset($this->errors['qty']);
        }

        $this->js('scannerDisconnect()');

        $this->validated();
    }

    public function render()
    {
        $this->collected = $this->orderProduct->collected;
        $this->collectedQty = $this->orderProduct->collectedQty;

        return view('orders.collect-item');
    }
}
