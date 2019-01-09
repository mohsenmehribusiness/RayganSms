<?php

namespace Trez\RayganSms;

use Illuminate\Support\ServiceProvider;

class ServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('RayganSms', function ($app) {
            return new Sms($app['config']['services.raygansms']);
        });
    }

    public function register()
    {
        // Needed for Laravel < 5.3 compatibility
    }
}
