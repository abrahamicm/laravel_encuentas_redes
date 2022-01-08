<?php

namespace App\Providers;


use App\Models\SocialNetwork;
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
            $average_timeItems = AverageTime::pluck('time_range','id')->toArray();
            $view->with('average_timeItems', $average_timeItems);
        });
        View::composer(['quizzes.fields'], function ($view) {
            $social_networkItems = SocialNetwork::pluck('name','id')->toArray();
            $view->with('social_networkItems', $social_networkItems);
        });
        View::composer(['quizzes.fields'], function ($view) {
            $ageItems = Age::pluck('age_range','id')->toArray();
            $view->with('ageItems', $ageItems);
        });
  
    }
}