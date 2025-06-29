<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Helpers\TextHelper;

class MyCustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(TextHelper::class, function ($val) {
            return new TextHelper();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
    //  dd("helooo");
    }
}
