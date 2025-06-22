<?php

namespace App\Observers;

use App\Events\ProductEvent;
use App\Models\ProductImage;

class ProductImageObserver
{
    /**
     * Handle the ProductImage "created" event.
     */
    public function created(ProductImage $productImage): void
    {
        ProductEvent::dispatch($productImage->product, __FUNCTION__);
    }

    /**
     * Handle the ProductImage "updated" event.
     */
    public function updated(ProductImage $productImage): void
    {
        ProductEvent::dispatch($productImage->product, __FUNCTION__);
    }

    /**
     * Handle the ProductImage "deleted" event.
     */
    public function deleted(ProductImage $productImage): void
    {
        ProductEvent::dispatch($productImage->product, __FUNCTION__);
    }

    /**
     * Handle the ProductImage "restored" event.
     */
    public function restored(ProductImage $productImage): void
    {
        ProductEvent::dispatch($productImage->product, __FUNCTION__);
    }

    /**
     * Handle the ProductImage "force deleted" event.
     */
    public function forceDeleted(ProductImage $productImage): void
    {
        ProductEvent::dispatch($productImage->product, __FUNCTION__);
    }
}
