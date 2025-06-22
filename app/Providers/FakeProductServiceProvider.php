<?php

namespace App\Providers;

use App\Faker\Product;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Support\ServiceProvider;

class FakeProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            $faker->addProvider(new Product($faker));

            return $faker;
        });

        $this->app->bind(Generator::class . ':' . config('app.faker_locale'), Generator::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
