<?php

namespace Flabib\XRay;

use Illuminate\Support\ServiceProvider;

class XRayServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/xray.php' => config_path('xray.php')
        ]);
    }

    public function register()
    {
        $this->app->singleton(XRay::class, function() {
            return new XRay();
        });
    }
}
