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


// Add middleware auth
Route::namespace('Dashboard')->prefix('dashboard')->group(function () {
    Route::get('index', 'IndexController@index')->name('dashboard.index');
    Route::resource('units', 'UnitController');
    Route::resource('proceedings', 'ProceedingController');
    Route::resource('enactments', 'EnactmentController');
    Route::resource('costs', 'CostController');
    Route::resource('incomes', 'IncomeController');
    Route::get('charge', 'ChargeController@index')->name('charge.index');
    Route::resource('invoices', 'InvoiceController');
    Route::resource('contracts', 'ContractController');
    Route::resource('maintenances', 'MaintenanceController');
    Route::resource('votes', 'VoteController');
    Route::resource('tickets', 'TicketController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
