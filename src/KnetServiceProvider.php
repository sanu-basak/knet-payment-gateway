<?php

namespace O2one\KnetPaymentGateway;

use Illuminate\Support\ServiceProvider;

class KnetServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/knet.php' => config_path('knet.php'),
            ], 'knet-config');
        }
    }

    /**
     * Make config publishment optional by merge the config from the package.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/knet.php',
            'knet'
        );
    }
}
