<?php

namespace App\Observers;

use App\Models\WarehouseStock;

class WarehouseStockObserver
{
    /**
     * Handle the WarehouseStock "created" event.
     */
    public function created(WarehouseStock $warehouseStock): void
    {
        $warehouseStock->user_id = auth()->user()->id ?? $warehouseStock->user_id;
        $warehouseStock->save();
    }

    /**
     * Handle the WarehouseStock "updated" event.
     */
    public function updated(WarehouseStock $warehouseStock): void
    {
        //
    }

    /**
     * Handle the WarehouseStock "deleted" event.
     */
    public function deleted(WarehouseStock $warehouseStock): void
    {
        //
    }

    /**
     * Handle the WarehouseStock "restored" event.
     */
    public function restored(WarehouseStock $warehouseStock): void
    {
        //
    }

    /**
     * Handle the WarehouseStock "force deleted" event.
     */
    public function forceDeleted(WarehouseStock $warehouseStock): void
    {
        //
    }
}
