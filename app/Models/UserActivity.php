<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    public const UPDATED_AT = null;

    protected $fillable = [
        'user_id',
        'subject',
        'object',
    ];

    protected function casts(): array
    {
        return [
            'object' => 'array',
        ];
    }
}