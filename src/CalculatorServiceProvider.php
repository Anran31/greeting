<?php

namespace Anran31\Greeting;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        // initiate class and binding class into service container.
        $this->app->bind('calculator', function ($app) {
            return new Calculator();
        });

        // $this->mergeConfigFrom(__DIR__ . '/config/config.php', 'calc_config');
    }

    public function boot()
    {
        // called after all services are registered.
        // if ($this->app->runningInConsole()) {
        //     $this->publishes([
        //         __DIR__ . '/config/config.php' => config_path('calc_config.php')
        //     ], 'config');
        // }
    }
}
