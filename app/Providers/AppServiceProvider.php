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
            'App\Services\Contracts\AirportServiceInterface',
            'App\Services\AirportService'
        );

        $this->app->bind(
            'App\Services\Contracts\AirlineServiceInterface',
            'App\Services\AirlineService'
        );

        $this->app->bind(
            'App\Services\Contracts\FlightServiceInterface',
            'App\Services\FlightService'
        );

        $this->app->bind(
            'App\Services\Contracts\TripServiceInterface',
            'App\Services\TripService'
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
