<?php
namespace Seguce92\Alerts;

use Illuminate\Support\ServiceProvider;

class AlertsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__ . '/config/config.php' => config_path('seguce92/alerts.php')], 'seguce92');

        $this->publishes([__DIR__. '/public' => public_path('vendor/seguce92')], 'public');

        $this->loadViewsFrom(__DIR__. '/resources/views', 'valerts');
    }

    public function register()
    {
        $this->app->bind('seguce92.alerts', function ($app) {
            return new AlertsMessage($app);
        });

        $this->mergeConfigFrom(__DIR__ . '/config/config.php', 'seguce92');
        
        $this->app->register(\Prologue\Alerts\AlertsServiceProvider::class);

        // register their aliases
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Alert', \Prologue\Alerts\Facades\Alert::class);
    }
}
