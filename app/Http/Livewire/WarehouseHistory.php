<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WarehouseHistory extends Component
{
    public function render()
    {
        return view('warehouses.history')
            ->title('Warehouse history');
    }
}
