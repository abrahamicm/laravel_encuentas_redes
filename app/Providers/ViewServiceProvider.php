<?php

namespace App\Providers;


use App\Models\SocielNetwork;
use App\Models\AverageTime;
use App\Models\Age;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['quizzes.fields'], function ($view) {
            $social_networkItems = SocielNetwork::pluck('name','id')->toArray();
            $view->with('social_networkItems', $social_networkItems);
        });
        View::composer(['quizzes.fields'], function ($view) {
            $ageItems = Age::pluck('age_range','id')->toArray();
            $view->with('ageItems', $ageItems);
        });

  
    }
}