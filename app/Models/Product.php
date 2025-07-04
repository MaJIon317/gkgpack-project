<?php

namespace App\Models;

use App\Observers\ProductObserver;
use App\Traits\Activity;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([ProductObserver::class])]
class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory, Activity;

    protected $fillable = [
        'sku',
        'barcode',
        'section',
        'name',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class)->orderByDesc('sort');
    }

    public function stocks(): HasMany
    {
        return $this->hasMany(WarehouseStock::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(OrderProduct::class);
    }
}
