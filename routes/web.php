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
    Route::get('information', 'IndexController@information')->name('dashboard.information');
    Route::resource('units', 'UnitController');
    Route::resource('proceedings', 'ProceedingController');
    Route::get('proceedings/delete/{id}', 'ProceedingController@destroy')->name('proceedings.delete');
    Route::resource('enactments', 'EnactmentController');
    Route::resource('costs', 'CostController');
    Route::resource('incomes', 'IncomeController');
    Route::get('charge', 'ChargeController@index')->name('charge.index');
    Route::get('charge/report', 'ChargeController@report')->name('charge.report.index');
    Route::post('charge/report', 'ChargeController@show')->name('charge.report.show');
    Route::resource('invoices', 'InvoiceController');
    Route::resource('contracts', 'ContractController');
    Route::resource('tickets', 'TicketController');
    Route::get('ticket/approve/{ticket_id}', 'TicketController@approve')->name('ticket.approve');
    Route::resource('notifications', 'NotificationController');
    Route::resource('permission-requests', 'PermissionRequestController');
    Route::resource('traffic', 'TrafficController');
    Route::resource('comfort', 'ComfortController');
    Route::resource('gallery', 'GalleryController');
    Route::get('gallery/delete/{photo}', 'GalleryController@destroy')->name('gallery.delete');

    Route::resource('votes', 'VoteController');
    Route::get('vote/options/{id}', 'VoteController@optionsIndex')->name('options.index');


    //Maintenance
    Route::get('maintenance/facility', 'MaintenanceController@facilityIndex')->name('maintenance.facility.index');
    Route::post('maintenance/facility/add', 'MaintenanceController@facilityStore')->name('maintenance.facility.store');
    Route::get('maintenance/elevator', 'MaintenanceController@elevatorIndex')->name('maintenance.elevator.index');

    // Monitoring
    Route::get('/monitoring','MonitoringController@index')->name('monitoring.index');
    Route::post('/monitoring/store','MonitoringController@store')->name('monitoring.store');

    // Penalty
    Route::resource('penalty', 'PenaltyController');
    Route::post('/penalty/store','PenaltyController@store')->name('penalty.store');
    Route::get('/penalty/delete/{id}','PenaltyController@destroy')->name('penalty.delete');


    Route::get('/security', function(){
        return view('dashboard.security');
    })->name('security');


    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('dashboard-logout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
