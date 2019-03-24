<?php

namespace ReliqArts\NonWWW;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use ReliqArts\NonWWW\Http\Middleware\NonWWW;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        // ...
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $router = $this->app['router'];

        // Register middleware...
        $router->middleware('nonWWW', NonWWW::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
