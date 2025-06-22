<?php

namespace App\Http\Livewire;

use App\Http\Requests\WarehouseStoreRequest;
use App\Http\Requests\WarehouseUpdateRequest;
use App\Models\Warehouse;
use LivewireUI\Modal\ModalComponent;

class WarehouseForm extends ModalComponent
{
    public Warehouse|null $warehouse = null;

    public string $name = '';

    public function mount()
    {
        $this->name = $this->warehouse->name ?? $this->name;
    }

    public function store()
    {
        $rules = new WarehouseStoreRequest;

        $validated = $this->validate($rules->rules());

        Warehouse::create($validated);

        $this->closeModal();

        $this->dispatch('toast', message: __('Completed successfully'));
    }

    public function update()
    {   
        $rules = new WarehouseUpdateRequest;

        $rules->warehouse = $this->warehouse;

        $validated = $this->validate($rules->rules());

        $this->warehouse->update($validated);

        $this->closeModal();

        $this->dispatch('toast', message: __('Saved successfully'));
    }

    public function render()
    {
        return view('warehouses.form');
    }
}
