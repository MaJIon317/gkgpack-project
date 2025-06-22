<?php

namespace App\Http\Livewire;

use App\Models\WarehouseReduce;
use Livewire\Component;
use Livewire\WithPagination;

class WarehouseReduces extends Component
{
    use WithPagination;

    public function delete(WarehouseReduce $warehouseReduce)
    {
        $warehouseReduce->delete();

        $this->dispatch('toast', message: __('Successfully deleted'));
    }

    #[On('echo:warehouse-reduces,WarehouseReduceEvent')]
    public function render()
    {
        $warehouseReduces = WarehouseReduce::orderByDesc('created_at')->paginate();

        return view('warehouse-reduces.index', compact('warehouseReduces'))
            ->title(__('Warehouse write-off'));
    }
}
