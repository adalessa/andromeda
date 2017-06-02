<?php

namespace Andromeda;

use Illuminate\Support\ServiceProvider;

class AndromedaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Andromeda::class, function ($app) {
            return new Andromeda;
        });
    }
}
