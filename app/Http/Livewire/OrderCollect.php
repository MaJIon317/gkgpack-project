<?php

namespace App\Http\Livewire;

use App\Enums\OrderStatuses;
use App\Models\Order;
use App\Models\OrderProduct;
use LivewireUI\Modal\ModalComponent;

class OrderCollect extends ModalComponent
{
    public Order $order;

    public bool $completed = false;

    public array $errors = [];

    protected $listeners = [
        'orderCollectParent'
    ];

    public function orderCollectParent(OrderProduct $orderProduct, array $errors = [])
    {
        if ($errors) {
            $this->errors[$orderProduct->id] = $orderProduct->id;
        } elseif (isset($this->errors[$orderProduct->id])) {
            unset($this->errors[$orderProduct->id]);
        }
    }

    public function collect()
    {
        if ($this->errors) {
            $this->dispatch('toast', message: __('Fix the errors to collect the order.'), type: 'error');
        } elseif ($this->completed) {
            $this->dispatch('toast', message: __('The order has already been completed'), type: 'error');
        } else {
            $this->order->status = OrderStatuses::COMPLETED->value;
            $this->order->save();

            foreach ($this->order->products as $product) {
                $this->dispatch('orderCollectItem', $product);
            }


            $this->dispatch('toast', message: __('You have successfully completed the order'));
        }
    }

    public function render()
    {
        $this->completed = $this->order->status === OrderStatuses::COMPLETED->value ? true : false;

        if (!$this->completed && !$this->errors) {
            foreach ($this->order->products as $product) {
                if (!$product->collected) {
                    $this->errors[$product->id] = $product->id;
                }
            }
        }

        return view('orders.collect');
    }
}
