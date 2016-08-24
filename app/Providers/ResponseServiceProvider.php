<?php

namespace App\Providers;

use App\Services\ResponseService;
use Illuminate\Support\ServiceProvider;

class ResponseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ResponseService::class, function ($app) {
            return new ResponseService();
        });
    }
}
