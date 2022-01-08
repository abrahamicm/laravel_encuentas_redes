<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');


Route::resource('averageTimes', App\Http\Controllers\AverageTimeController::class);






Route::resource('ages', App\Http\Controllers\AgeController::class);


Route::resource('socialNetworks', App\Http\Controllers\SocialNetworkController::class);




Route::resource('quizzes', App\Http\Controllers\QuizController::class);
