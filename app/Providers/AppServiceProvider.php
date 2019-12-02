<?php

namespace App\Providers;
use View;
use App\user;
use App\Catagorey;
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
       // View::share('*','kishor Laskar'); //sends data to all views

        View::composer('front-end.includess.header',function($view) 
        { 
             $view->with('catagoreys', Catagorey::where('publication_status',1)->get());

        } ); //sends data to specific view
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
