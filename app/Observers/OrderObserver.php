<?php

namespace App\Observers;

use App\Models\Order;
use App\Events\OrderEvent;

class OrderObserver
{
    /**
     * Handle the Order "created" event.
     */
    public function created(Order $order): void
    {
        OrderEvent::dispatch($order, __FUNCTION__);

        $order->statuses()->create();
    }

    /**
     * Handle the Order "updated" event.
     */
    public function updated(Order $order): void
    {
        OrderEvent::dispatch($order, __FUNCTION__);

        if ($order->wasChanged('status')) {
            $order->statuses()->create([
                'status' => $order->status
            ]);
        }
    }

    /**
     * Handle the Order "deleted" event.
     */
    public function deleted(Order $order): void
    {
        OrderEvent::dispatch($order, __FUNCTION__);
    }

    /**
     * Handle the Order "restored" event.
     */
    public function restored(Order $order): void
    {
        OrderEvent::dispatch($order, __FUNCTION__);
    }

    /**
     * Handle the Order "force deleted" event.
     */
    public function forceDeleted(Order $order): void
    {
        OrderEvent::dispatch($order, __FUNCTION__);
    }
}
