<?php namespace Vis\Voting;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class VotingServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . '/../vendor/autoload.php';

        $this->setupRoutes($this->app->router);
        $this->loadViewsFrom(realpath(__DIR__ . '/resources/views'), 'voting');
        $this->loadViewsFrom(base_path('resources/views/vis/voting'), 'voting');

        $this->publishes([
            __DIR__
            . '/published' => public_path('packages/vis/voting'),
            __DIR__ . '/config' => config_path('voting/')
        ], 'voting');

        $this->publishes([
            __DIR__
            . '/published' => public_path('packages/vis/voting')
        ], 'public');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/voting'),
        ], 'voting_views');

    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/routers.php';
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }

    public function provides()
    {
    }
}



