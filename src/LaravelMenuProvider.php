<?php

namespace Anwar\Laravelmenu;

use Illuminate\Support\ServiceProvider;

class LaravelMenuProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/LaravelMenuRoute.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
