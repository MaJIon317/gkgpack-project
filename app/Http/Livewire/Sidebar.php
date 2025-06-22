<?php

namespace App\Http\Livewire;

use App\Http\Requests\OrderStoreRequest;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\WarehouseMovingStoreRequest;
use App\Http\Requests\WarehouseRegistrationStoreRequest;
use App\Http\Requests\WarehouseReduceStoreRequest;
use App\Http\Requests\WarehouseStoreRequest;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Support\Collection;
use Livewire\Component;

class Sidebar extends Component
{
    public Collection $sidebars;

    public $sidebarsClasses = [
        ['Dashboard', 'dashboard'],
        OrderStoreRequest::class => ['Orders', 'orders'],
        ProductStoreRequest::class => ['Products', 'products'],
        WarehouseStoreRequest::class => ['Warehouses', 'warehouses'],
        WarehouseMovingStoreRequest::class => ['Movings', 'warehouse.movings'],
        WarehouseRegistrationStoreRequest::class => ['Registrations', 'warehouse.registrations'],
        WarehouseReduceStoreRequest::class => ['Write-off', 'warehouse.reduces'],
        UserStoreRequest::class => ['Users', 'users'],
        ['Transactions', 'warehouse.histories'],
    ];

    public function mount()
    {
        $this->sidebars = collect([]);

        foreach($this->sidebarsClasses as $sidebarsClass => $value) {
            $collect = collect([]);

            $check = true;

            if (!is_integer($sidebarsClass)) {
                $rules = new $sidebarsClass;

                if (!$rules->authorize()) {
                    $check = false;
                }
            }

            if ($check) {
                $collect->put('name', __($value[0]));
                $collect->put('route', $value[1]);
                $collect->put('link', route($value[1]));

                $this->sidebars->push($collect);
            }
        }
    }

    public function render()
    {
        return view('components.sidebar');
    }
}
