<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

if (!function_exists('timezones')) {
    function timezones(): Collection
    {
        return Cache::rememberForever('timezones_list_collection', function () {
            $timestamp = time();

            foreach (timezone_identifiers_list(\DateTimeZone::ALL) as $key => $value) {
                date_default_timezone_set($value);
                
                $timezone[$value] = $value . ' (UTC ' . date('P', $timestamp) . ')';
            }

            return collect($timezone)->sortKeys();
        });
    }
}

if (!function_exists('get_user_timezone')) {
    function get_user_timezone() 
    {
        return optional(auth()->user())->timezone ?? config('app.timezone');
    }
}
