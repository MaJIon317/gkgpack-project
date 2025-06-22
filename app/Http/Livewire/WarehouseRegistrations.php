<?php

namespace App\Http\Livewire;

use App\Models\WarehouseRegistration;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class WarehouseRegistrations extends Component
{
    use WithPagination; 
    
    public function delete(WarehouseRegistration $warehouseRegistration)
    {
        $warehouseRegistration->delete();
   
        $this->dispatch('toast', message: __('Successfully deleted'));
    }

    #[On('echo:warehouse-registrations,WarehouseRegistrationEvent')]
    public function render()
    {
        $warehouseRegistrations = WarehouseRegistration::orderByDesc('created_at')->paginate();

        return view('warehouse-registrations.index', compact('warehouseRegistrations'))
            ->title(__('Checking in at the warehouse')); 
    }
}
