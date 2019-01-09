<?php

namespace Trez\RayganSms;

use Illuminate\Support\ServiceProvider;

class RayganSmsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('RayganSms', function ($app) {
            return new Sms($app['config']['services.raygansms']);
        });
    }
}
