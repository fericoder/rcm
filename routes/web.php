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
Route::namespace('Dashboard')->prefix('dashboard')->middleware('auth', 'configuration')->group(function () {
    Route::resource('configuration', 'ComplexController');
    Route::get('index', 'IndexController@index')->name('dashboard.index');
    Route::resource('units', 'UnitController');
    Route::resource('proceedings', 'ProceedingController');
    Route::resource('enactments', 'EnactmentController');
    Route::resource('costs', 'CostController');
    Route::resource('incomes', 'IncomeController');
    Route::get('charge', 'ChargeController@index')->name('charge.index');
    Route::get('charge/report', 'ChargeController@report')->name('charge.report.index');
    Route::post('charge/report', 'ChargeController@show')->name('charge.report.show');
    Route::resource('invoices', 'InvoiceController');
    Route::resource('contracts', 'ContractController');
    Route::resource('maintenances', 'MaintenanceController');
    Route::resource('votes', 'VoteController');
    Route::resource('tickets', 'TicketController');
    Route::resource('notifications', 'NotificationController');
    Route::resource('permission-requests', 'PermissionRequestController');
    Route::resource('traffic', 'TrafficController');


    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
