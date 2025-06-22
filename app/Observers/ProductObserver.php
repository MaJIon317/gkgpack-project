<?php

namespace App\Observers;

use App\Events\ProductEvent;
use App\Models\Product;

class ProductObserver
{
    /**
     * Handle the Product "created" event.
     */
    public function created(Product $product): void
    {
        ProductEvent::dispatch($product, __FUNCTION__);
    }

    /**
     * Handle the Product "updated" event.
     */
    public function updated(Product $product): void
    {
        ProductEvent::dispatch($product, __FUNCTION__);
    }

    /**
     * Handle the Product "deleted" event.
     */
    public function deleted(Product $product): void
    {
        ProductEvent::dispatch($product, __FUNCTION__);
    }

    /**
     * Handle the Product "restored" event.
     */
    public function restored(Product $product): void
    {
        ProductEvent::dispatch($product, __FUNCTION__);
    }

    /**
     * Handle the Product "force deleted" event.
     */
    public function forceDeleted(Product $product): void
    {
        ProductEvent::dispatch($product, __FUNCTION__);
    }
}
