<?php

namespace App\Observers;

use App\Events\WarehouseReduceEvent;
use App\Models\WarehouseReduce;

class WarehouseReduceObserver
{
    /**
     * Handle the WarehouseReduce "created" event.
     */
    public function created(WarehouseReduce $warehouseReduce): void
    {
        WarehouseReduceEvent::dispatch($warehouseReduce, __FUNCTION__);
    }

    /**
     * Handle the WarehouseReduce "updated" event.
     */
    public function updated(WarehouseReduce $warehouseReduce): void
    {
        WarehouseReduceEvent::dispatch($warehouseReduce, __FUNCTION__);
    }

    /**
     * Handle the WarehouseReduce "deleted" event.
     */
    public function deleted(WarehouseReduce $warehouseReduce): void
    {
        WarehouseReduceEvent::dispatch($warehouseReduce, __FUNCTION__);
    }

    /**
     * Handle the WarehouseReduce "restored" event.
     */
    public function restored(WarehouseReduce $warehouseReduce): void
    {
        WarehouseReduceEvent::dispatch($warehouseReduce, __FUNCTION__);
    }

    /**
     * Handle the WarehouseReduce "force deleted" event.
     */
    public function forceDeleted(WarehouseReduce $warehouseReduce): void
    {
        WarehouseReduceEvent::dispatch($warehouseReduce, __FUNCTION__);
    }
}
