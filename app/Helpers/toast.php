<?php

use App\Events\NewNotificationCreated;

if (!function_exists('toast')) {
    function toast(string $message, $type = 'success'): void
    {
        event(new NewNotificationCreated(auth()->id(), $message, $type));
    }
}
