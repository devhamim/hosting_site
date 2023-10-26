<?php

namespace App\Providers;

use App\Models\hosting_category;
use App\Models\hosting_pakage;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // hosting
        View::composer('frontend/layouts/header', function ($view){
            $view->with('categorys', hosting_category::all());
        });
        
    }
}
