<?php

namespace App\Http\Livewire;

use App\Models\WarehouseMoving;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class WarehouseMovings extends Component
{
    use WithPagination; 

    public function delete(WarehouseMoving $warehouseMoving)
    {
        $warehouseMoving->delete();
   
        $this->dispatch('toast', message: __('Successfully deleted'));
    }

    #[On('echo:warehouse-movings,WarehouseMovingEvent')]
    public function render()
    {
        $warehouseMovings = WarehouseMoving::orderByDesc('created_at')->paginate();

        return view('warehouse-movings.index', compact('warehouseMovings'))
            ->title(__('Movings'));
    }
}
