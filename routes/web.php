<?php

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

// App Routes
Route::get('/', 'AppController@index')->name('app.index');
Route::get('/about', 'AppController@about')->name('app.about');
Route::get('/contact', 'AppController@contact')->name('app.contact');
Route::get('/services', 'AppController@services')->name('app.services');


Route::namespace('Dashboard')->prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('index', 'DashboardController@index')->name('dashboard.index');

});
