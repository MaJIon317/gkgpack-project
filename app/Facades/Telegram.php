<?php

namespace App\Facades;

use App\Services\TelegramService;
use Illuminate\Support\Facades\Facade;

class Telegram extends Facade {
    
    protected static function getFacadeAccessor()
    {
        return TelegramService::class;
    }
}