<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/cleared', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    Artisan::call('config:cache');
    Artisan::call('route:cache');
    Artisan::call('view:cache');

    return "Cache is removed";
});

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/test', \App\Http\Livewire\Test::class)->name('test');

    Route::get('/', \App\Http\Livewire\Dashboard::class)->name('dashboard');

    Route::middleware('role:admin,importer')->group(function () {
        Route::get('/users', \App\Http\Livewire\Users::class)->name('users');
        Route::get('/warehouses', \App\Http\Livewire\Warehouses::class)->name('warehouses');
        Route::get('/warehouse-registrations', \App\Http\Livewire\WarehouseRegistrations::class)->name('warehouse.registrations');
        Route::get('/warehouse-reduces', \App\Http\Livewire\WarehouseReduces::class)->name('warehouse.reduces');
        Route::get('/warehouse-movings', \App\Http\Livewire\WarehouseMovings::class)->name('warehouse.movings');
        Route::get('/warehouse-histories', \App\Http\Livewire\WarehouseHistory::class)->name('warehouse.histories');
        Route::get('/products', \App\Http\Livewire\Products::class)->name('products');
        Route::get('/orders', \App\Http\Livewire\Orders::class)->name('orders');
    });

    Route::get('/user-activity', \App\Http\Livewire\UserActivity::class)->name('user.activity');

    Route::get('/setting', \App\Http\Livewire\Setting::class)->name('setting');
});

Route::middleware('guest')->group(function () {
    Route::get('/', \App\Http\Livewire\Welcome::class)->name('home');
    Route::get('/login', \App\Http\Livewire\Login::class)->name('login');
});

Route::get('/logout', function () {
    Auth::logout();

    return redirect()->route('login');
})->name('logout');
