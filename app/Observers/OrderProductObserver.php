<?php

namespace App\Observers;

use App\Events\OrderProductEvent;
use App\Models\OrderProduct;

class OrderProductObserver
{
    /**
     * Handle the OrderProduct "created" event.
     */
    public function created(OrderProduct $orderProduct): void
    {
        OrderProductEvent::dispatch($orderProduct, __FUNCTION__);

        $orderProduct->stock()->create([
            'order_product_id' => $orderProduct->id,
            'product_id' => $orderProduct->product_id,
            'warehouse_id' => $orderProduct->warehouse_id,
            'qty' => -(int) $orderProduct->qty,
            'reserve' => $orderProduct->collected ? false : true,
        ]);
    }

    /**
     * Handle the OrderProduct "updated" event.
     */
    public function updated(OrderProduct $orderProduct): void
    {
        OrderProductEvent::dispatch($orderProduct, __FUNCTION__);

        $orderProduct->stock->update([
            'warehouse_id' => $orderProduct->warehouse_id,
            'qty' => -(int) $orderProduct->qty,
            'reserve' => $orderProduct->collected ? false : true,
        ]);
    }

    /**
     * Handle the OrderProduct "deleted" event.
     */
    public function deleted(OrderProduct $orderProduct): void
    {
        OrderProductEvent::dispatch($orderProduct, __FUNCTION__);
    }

    /**
     * Handle the OrderProduct "restored" event.
     */
    public function restored(OrderProduct $orderProduct): void
    {
        OrderProductEvent::dispatch($orderProduct, __FUNCTION__);
    }

    /**
     * Handle the OrderProduct "force deleted" event.
     */
    public function forceDeleted(OrderProduct $orderProduct): void
    {
        OrderProductEvent::dispatch($orderProduct, __FUNCTION__);
    }
}
