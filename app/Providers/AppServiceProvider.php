<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        view()->composer('*',function($view){

            $categories = Category::all();

            return $view->with(['categories' => $categories]);

        });

        Schema::defaultStringLength(191);
    }

    /**categories
 => $categories     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
