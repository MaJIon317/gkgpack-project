<?php

namespace App\Models;

use App\Observers\ProductImageObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([ProductImageObserver::class])]
class ProductImage extends Model
{
   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'path',
        'sort',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
