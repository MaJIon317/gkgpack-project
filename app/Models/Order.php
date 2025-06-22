<?php

namespace App\Models;

use App\Observers\OrderObserver;
use App\Observers\OrderProductObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[ObservedBy([OrderObserver::class])]
class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'name',
        'barcode',
        'note'
    ];

    #[ObservedBy([OrderProductObserver::class])]
    public function products(): HasMany
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function statuses(): HasMany
    {
        return $this->hasMany(OrderStatus::class);
    }
}
