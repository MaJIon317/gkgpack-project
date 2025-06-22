<?php

namespace App\Observers;

use App\Events\WarehouseMovingEvent;
use App\Models\WarehouseMoving;

class WarehouseMovingObserver
{
    /**
     * Handle the WarehouseMoving "created" event.
     */
    public function created(WarehouseMoving $warehouseMoving): void
    {
        WarehouseMovingEvent::dispatch($warehouseMoving, __FUNCTION__);
    }

    /**
     * Handle the WarehouseMoving "updated" event.
     */
    public function updated(WarehouseMoving $warehouseMoving): void
    {
        WarehouseMovingEvent::dispatch($warehouseMoving, __FUNCTION__);
    }

    /**
     * Handle the WarehouseMoving "deleted" event.
     */
    public function deleted(WarehouseMoving $warehouseMoving): void
    {
        WarehouseMovingEvent::dispatch($warehouseMoving, __FUNCTION__);
    }

    /**
     * Handle the WarehouseMoving "restored" event.
     */
    public function restored(WarehouseMoving $warehouseMoving): void
    {
        WarehouseMovingEvent::dispatch($warehouseMoving, __FUNCTION__);
    }

    /**
     * Handle the WarehouseMoving "force deleted" event.
     */
    public function forceDeleted(WarehouseMoving $warehouseMoving): void
    {
        WarehouseMovingEvent::dispatch($warehouseMoving, __FUNCTION__);
    }
}
