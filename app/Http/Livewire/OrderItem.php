<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Enums\OrderStatuses;
use Livewire\Attributes\On;
use Livewire\Component;

class OrderItem extends Component
{
    public ?Order $order = null;

    public function delete(Order $order)
    {
        $order->delete();

        $this->dispatch('toast', message: __('Successfully deleted'));
    }

    public function take(Order $order)
    {
        $order->update([
            'user_id' => auth()->user()->id,
            'status' => OrderStatuses::PROCESSING,
        ]);

        $this->dispatch('openModal', component: 'order-collect', arguments: ['order' => $order]);
    }

    #[On('echo:orders.{order.id},OrderEvent')]
    public function render()
    {
        return view('orders.item');
    }
}
