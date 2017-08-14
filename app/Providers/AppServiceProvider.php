<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Categories;
use Auth;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('myname','Rusy');

        View::composer('admin.brands.create',function($view){
            $view->with('categories', Categories::all());
        });


     View::composer('*',function($view){
            $view->with('auth', Auth::user());
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
