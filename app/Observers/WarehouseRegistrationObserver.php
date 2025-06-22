<?php

namespace App\Observers;

use App\Models\WarehouseRegistration;
use App\Events\WarehouseRegistrationEvent;

class WarehouseRegistrationObserver
{
    /**
     * Handle the WarehouseRegistration "created" event.
     */
    public function created(WarehouseRegistration $warehouseRegistration): void
    {
        WarehouseRegistrationEvent::dispatch($warehouseRegistration, __FUNCTION__);
    }

    /**
     * Handle the WarehouseRegistration "updated" event.
     */
    public function updated(WarehouseRegistration $warehouseRegistration): void
    {
        WarehouseRegistrationEvent::dispatch($warehouseRegistration, __FUNCTION__);
    }

    /**
     * Handle the WarehouseRegistration "deleted" event.
     */
    public function deleted(WarehouseRegistration $warehouseRegistration): void
    {
        WarehouseRegistrationEvent::dispatch($warehouseRegistration, __FUNCTION__);
    }

    /**
     * Handle the WarehouseRegistration "restored" event.
     */
    public function restored(WarehouseRegistration $warehouseRegistration): void
    {
        WarehouseRegistrationEvent::dispatch($warehouseRegistration, __FUNCTION__);
    }

    /**
     * Handle the WarehouseRegistration "force deleted" event.
     */
    public function forceDeleted(WarehouseRegistration $warehouseRegistration): void
    {
        WarehouseRegistrationEvent::dispatch($warehouseRegistration, __FUNCTION__);
    }
}
