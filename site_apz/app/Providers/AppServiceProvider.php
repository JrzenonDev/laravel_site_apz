<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Metodos ou Callbacks que são chamdos qdo uma view e renderizada
        view()->composer('*', function($view){
            $layout = 'layouts.html';
            $view->with(compact('layout'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
