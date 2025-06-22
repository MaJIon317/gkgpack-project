<?php

namespace App\Models;

use App\Observers\WarehouseStockObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[ObservedBy([WarehouseStockObserver::class])]
class WarehouseStock extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'warehouse_id',
        'order_product_id',
        'warehouse_registration_id',
        'warehouse_reduce_id',
        'warehouse_moving_id',
        'qty',
        'reserve',
    ];

    protected function casts(): array
    {
        return [
            'qty' => 'integer',
            'reserve' => 'integer',
        ];
    }

    protected $attributes = [
        'qty' => 1,
        'reserve' => false,
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
