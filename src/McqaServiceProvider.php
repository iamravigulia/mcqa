<?php

namespace edgewizz\mcqa;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class McqaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edgewizz\Mcqa\Controllers\McqaController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd($this);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__ . '/components', 'mcqa');
        Blade::component('mcqa::mcqa.open', 'mcqa.open');
        Blade::component('mcqa::mcqa.edit', 'mcqa.edit');
        Blade::component('mcqa::mcqa.index', 'mcqa.index');
    }
}
