<?php

namespace App\Models;

use App\Observers\WarehouseMovingObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[ObservedBy([WarehouseMovingObserver::class])]
class WarehouseMoving extends Model
{
    protected $fillable = [
        'from_warehouse_id',
        'to_warehouse_id',
        'note',
    ];

    public function from_warehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class, 'from_warehouse_id');
    }

    public function to_warehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class, 'to_warehouse_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(WarehouseStock::class);
    }
}