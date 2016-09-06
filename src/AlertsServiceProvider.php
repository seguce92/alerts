<?php
namespace Seguce92\Alerts;

use Illuminate\Support\ServiceProvider;

class AlertsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__ . '/config/config.php' => config_path('seguce92/alerts.php')], 'seguce92');

        $this->publishes([__DIR__. '/public' => public_path('vendor/seguce92/alerts')], 'public');

        $this->loadViewsFrom(__DIR__. '/resources/views/'), 'alerts');
    }

    public function register()
    {
        $this->app->bind('alerts', function ($app) {
            return new Alerts($app);
        });

        $this->app->register(\Prologue\Alerts\AlertsServiceProvider::class);

        // register their aliases
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Alert', \Prologue\Alerts\Facades\Alert::class);
    }
}
