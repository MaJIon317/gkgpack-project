<?php

namespace App\Observers;

use App\Events\WarehouseEvent;
use App\Models\Warehouse;

class WarehouseObserver
{
    /**
     * Handle the Warehouse "created" event.
     */
    public function created(Warehouse $warehouse): void
    {
        WarehouseEvent::dispatch($warehouse, __FUNCTION__);
    }

    /**
     * Handle the Warehouse "updated" event.
     */
    public function updated(Warehouse $warehouse): void
    {
        WarehouseEvent::dispatch($warehouse, __FUNCTION__);
    }

    /**
     * Handle the Warehouse "deleted" event.
     */
    public function deleted(Warehouse $warehouse): void
    {
        WarehouseEvent::dispatch($warehouse, __FUNCTION__);
    }

    /**
     * Handle the Warehouse "restored" event.
     */
    public function restored(Warehouse $warehouse): void
    {
        WarehouseEvent::dispatch($warehouse, __FUNCTION__);
    }

    /**
     * Handle the Warehouse "force deleted" event.
     */
    public function forceDeleted(Warehouse $warehouse): void
    {
        WarehouseEvent::dispatch($warehouse, __FUNCTION__);
    }
}
