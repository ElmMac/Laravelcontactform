<?php
namespace Elmmac\Laravelcontactform;
use Carbon\Laravel\ServiceProvider;


class LaravelcontactformServiceProvider extends ServiceProvider
{ // every service provider must have two methods/functions: the boot() and the register() methods
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'Laravelcontactform');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations'); // for database model creation

        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
            __DIR__.'/views' => resource_path('views/vendor/Laravelcontactform'),
        ]); // You should publish by: php artisan vendor:publish
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/contact.php', 'Laravelcontactform'); // second argument is the package name
    }

}
























