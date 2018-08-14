<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    //protected  $defer = true;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //echo 'Se ha llamado a boot() de AppServiceProvider: '. get_class($this->app->make('Tests\Integration\Providers\Alguien')).PHP_EOL;
        //echo 'Se ha llamado a boot() de AppServiceProvider: '.PHP_EOL;
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    public function provides()
    {
        //echo 'Se ha llamado a provides() de AppServiceProvider'.PHP_EOL;
        return parent::provides(); // TODO: Change the autogenerated stub
    }
}
