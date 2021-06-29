<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Services\Contracts\FlightServiceInterface',
            'App\Services\FlightService'
        );

        $this->app->bind(
            'App\Services\Contracts\AirPortServiceInterface',
            'App\Services\AirPortService'
        );

        $this->app->bind(
            'App\Services\Contracts\AirCompanyServiceInterface',
            'App\Services\AirCompanyService'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
