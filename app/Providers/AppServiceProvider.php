<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::share('titulo_largo', 'Sistema de venta de productos');
        \View::share('titulo_corto', 'SVP');
        \View::share('url', 'http://localhost:8000/');
        Schema::defaultStringLength(191);
    }
}
