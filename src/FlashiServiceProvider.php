<?php namespace Bdunn313;

use Illuminate\Support\ServiceProvider;

class FlashiServiceProvider extends ServiceProvider {

    public function boot()
    {
        $viewpath = __DIR__.'/resources/views';
        $this->loadViewsFrom($viewpath, 'flashi');

        $this->publishes([
            $viewpath => base_path('resources/views/vendor/flashi'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('flashi', function($app)
        {
            return $app->make('Bdunn313\FlashiManager');
        });
    }
}