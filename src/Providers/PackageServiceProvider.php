<?php

namespace Package\Providers;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->register(RouteServiceProvider::class);

        $this->defineResources();
    }

    /**
     * Define the resources for the package.
     *
     * @return void
     */
    protected function defineResources()
    {
        $this->loadViewsFrom(PACKAGE_PATH.'/resources/views', 'package');

        if ($this->app->runningInConsole()) {
            $this->defineAssetPublishing();
        }
    }

    /**
     * Define the asset publishing configuration.
     *
     * @return void
     */
    public function defineAssetPublishing()
    {
        $this->publishes([
            PACKAGE_PATH.'/public' => public_path('package'),
        ], 'package-public');
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        if (! defined('PACKAGE_PATH')) {
            define('PACKAGE_PATH', realpath(__DIR__.'/../../'));
        }
    }
}
