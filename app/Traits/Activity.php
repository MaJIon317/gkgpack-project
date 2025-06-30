<?php

namespace App\Traits;

use App\Models\UserActivity;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait Activity
{
    public function activities(): HasMany
    {
        return $this->hasMany(UserActivity::class, 'subject_id')
            ->where('subject_type', $this->getMorphClass())
            ->orderByDesc('created_at')
            ->limit(20);
    }
}
