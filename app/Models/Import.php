<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    protected $fillable = [
        'user_id',
        'key',
        'name',
        'path',
        'size',
        'done',
        'decision',
    ];

    protected function casts(): array
    {
        return [
            'user_id' => 'integer',
            'key' => 'string',
            'name' => 'string',
            'path' => 'string',
            'size' => 'integer',
            'done' => 'integer',
            'decision' => 'array',
        ];
    }
}
