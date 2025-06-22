<?php

namespace App\Models;

use App\Observers\WarehouseReduceObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[ObservedBy([WarehouseReduceObserver::class])]
class WarehouseReduce extends Model
{
    protected $fillable = [
        'warehouse_id',
        'note',
    ];

    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class)->withTrashed();
    }

    public function stock(): HasOne
    {
        return $this->hasOne(WarehouseStock::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(WarehouseStock::class);
    }
}
