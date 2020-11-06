<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'HomeController@welcome')->name('welcome');
Auth::routes(['verify' => true]);

// Middlewares are defined in Controllers
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/leaderboard', 'HomeController@leaderboard')->name('leaderboard');
Route::get('/overallscore', 'HomeController@overall')->name('overall');
Route::get('/rules', 'HomeController@rules')->name('rules');
Route::get('/question', 'QuestionController@index')->name('question');
Route::post('/question', 'QuestionController@check')->name('check');
Route::get('/levelup', 'QuestionController@levelup')->name('levelup');
Route::post('/levelup', 'QuestionController@level2question')->name('level2question');

    

// These are for admin only
Route::redirect('/database', '/adminer-4.7.6-en.php');
Route::resource('levels', 'LevelController');
Route::resource('users', 'UserController');
Route::post('/search', 'UserController@search')->name('search');
Route::get('/ban/{user}', 'UserController@ban')->name('ban');
Route::get('/allow/{user}', 'UserController@allow')->name('allow');
Route::get('/nullify', 'UserController@nullify')->name('nullify');
Route::fallback(function () {
    return view('error');
});

