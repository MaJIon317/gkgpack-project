<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class OrderProducts extends Component
{
    public $products;

    public function render()
    {
        return view('orders.products');
    }
}
