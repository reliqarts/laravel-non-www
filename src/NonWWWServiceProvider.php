<?php

namespace ReliQArts\NonWWW;

use Illuminate\Support\ServiceProvider;
use ReliQArts\NonWWW\Http\Middleware\NonWWW;

class NonWWWServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // ...
    }

    /**
     * Register the service provider.
     *
     * @return void
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
