<?php

namespace Habib\Layout\Providers;

use Illuminate\Support\ServiceProvider;

class LayoutServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->register(EventServiceProvider::class);
        $path = dirname(dirname(__DIR__));
        $this->mergeConfigFrom("$path/config/layout.php",'layout');
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {

        $path = dirname(dirname(__DIR__));
        if ($this->app->runningInConsole()){

            $this->publishes([
                "$path/config/layout.php"=>config_path('layout.php'),
            ],'config');

            $this->publishes([
                "$path/assets"=>public_path('assets'),
                "$path/resources/css"=>public_path('assets/css'),
                "$path/resources/js"=>public_path('assets/js'),
            ],'layout assets');

            $this->publishes([
                "$path/resources/views"=>resource_path('views/vendor/layout'),
            ],'views');
            if (is_dir("$path/fonts")) {
                $this->publishes([
                    "$path/fonts"=>public_path('fonts'),
                ],'fonts');
            }

        }

        $this->loadViewsFrom("$path/resources/views",'layout');

        $this->loadViewComponentsAs('layout',[

        ]);
    }
}
