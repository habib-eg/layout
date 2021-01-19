<?php

namespace Habib\Layout\Providers;
use Habib\Layout\Commands\AuthCommand;
use Habib\Layout\Components\Activity;
use Habib\Layout\Components\Alert;
use Habib\Layout\Components\AppFooter;
use Habib\Layout\Components\AppLayout;
use Habib\Layout\Components\AppLogo;
use Habib\Layout\Components\AppNavbar;
use Habib\Layout\Components\AppSidebar;
use Habib\Layout\Components\Article;
use Habib\Layout\Components\AuthLayout;
use Habib\Layout\Components\Card;
use Habib\Layout\Components\CopyRight;
use Habib\Layout\Components\CustomControl;
use Habib\Layout\Components\ErrorLayout;
use Habib\Layout\Components\InputFormGroup;
use Habib\Layout\Components\Master;
use Habib\Layout\Components\MessageItemDropdown;
use Habib\Layout\Components\NavbarDropdown;
use Habib\Layout\Components\NavItemDropdown;
use Habib\Layout\Components\NavLink;
use Habib\Layout\Components\NotificationItemDropdown;
use Illuminate\Support\ServiceProvider;

class LayoutServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    public $commands = [
        AuthCommand::class
    ];

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
            $this->commands($this->commands);
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

            $this->publishes([
                "$path/migrations"=>database_path('migrations'),
            ],'migrations');

            $this->publishes([
                "$path/stubs"=>base_path('stubs'),
            ],'stubs');

            if (is_dir("$path/fonts")) {
                $this->publishes([
                    "$path/fonts"=>public_path('fonts'),
                ],'fonts');
            }

        }

        $this->loadViewsFrom("$path/resources/views",'layout');
        $this->loadViewsFrom("$path/resources/components",'layout');

        $this->loadViewComponentsAs('layout',[
            Activity::class, Alert::class, Master::class, AppFooter::class, AppLayout::class, AppLogo::class, AppNavbar::class, AppSidebar::class, Article::class,
            AuthLayout::class, Card::class, CopyRight::class, CustomControl::class, ErrorLayout::class, InputFormGroup::class, MessageItemDropdown::class,
            NavbarDropdown::class, NavItemDropdown::class, NavLink::class, NotificationItemDropdown::class,
        ]);
    }
}
