<?php

namespace Softpyramid\ItelSms;

use Illuminate\Support\ServiceProvider;

class SMSServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/sms.php' => config_path('sms.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/sms.php',
            'sms'
        );
    }
}
