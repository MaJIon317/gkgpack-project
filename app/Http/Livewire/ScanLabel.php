<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class ScanLabel extends Component
{
    public function searchBarcode(string $barcode): void
    {
        $order = Order::where('barcode', $barcode)->first();
    
        if ($order) {
            if (!$order->user_id) {
                $order->update([
                    'user_id' => auth()->user()->id
                ]);
            }

            $this->dispatch('scannerReset');

            $this->dispatch('openModal', component: 'order-collect', arguments: ['order' => $order]);
        } else {
            $this->dispatch('toast', message: __('Couldn\'t find the order'), type: 'error');
        }
    }

    public function render()
    {
        return view('scan-label');
    }
}
