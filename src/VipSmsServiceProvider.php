<?php

namespace Alirezaabdolmaleki\VipSms;

use Alirezaabdolmaleki\VipSms\Drivers\Mediana;
use Alirezaabdolmaleki\VipSms\Drivers\RayganSms;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class VipSmsServiceProvider extends ServiceProvider
{
    public function register()
    {

        $this->mergeConfigFrom(
            __DIR__.'/config/sms.php', 'sms'
        );

        $this->app->singleton('Mediana', function ($app) {

            return new Mediana();
        });

        $this->app->singleton('RayganSms', function ($app) {

            return new RayganSms();
        });

    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/config/sms.php' => config_path('sms.php'),
        ], "publish config file");
    }
}
