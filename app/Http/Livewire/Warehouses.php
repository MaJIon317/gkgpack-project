<?php

namespace App\Http\Livewire;

use App\Models\Warehouse;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Warehouses extends Component
{
    use WithPagination; 

    public function delete(Warehouse $warehouse)
    {
        $warehouse->delete();
   
        $this->dispatch('toast', message: __('Successfully deleted'));
    }

    #[On('echo:warehouses,WarehouseEvent')]
    public function render()
    {
        $warehouses = Warehouse::orderByDesc('created_at')->paginate();

        return view('warehouses.index', compact('warehouses'))
            ->title(__('Warehouses'));
    }
}
