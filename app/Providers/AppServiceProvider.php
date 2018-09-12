<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema;
use App\Article;
use App\Category;
use App\User;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer(['partials.sidebar','partials.header'], function ($view) {

           $allarticles = Article::orderBy('created_at','desc')->get();
           $allcategories = Category::all();

           $view->with(compact('allarticles','allcategories'));

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
