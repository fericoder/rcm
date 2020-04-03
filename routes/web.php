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

Route::get('/a/{complex}', 'WebsiteController@index')->name('website.index');
Route::post('/a/{complex}/massage', 'WebsiteController@massage')->name('website.massage');


// Add middleware auth
Route::namespace('Dashboard')->prefix('dashboard')->middleware('auth', 'configuration')->group(function () {

    // Website Configuratuon
    Route::get('configuration/website', 'ComplexController@WebsiteForm')->name('dashboard.configuration.website');
    Route::post('configuration/website', 'ComplexController@WebsiteFormStore')->name('configuration.WebsiteFormstore');
    Route::post('configuration/website/personnel', 'ComplexController@personnel')->name('personnel.store');

    Route::resource('configuration', 'ComplexController');



    Route::get('index', 'IndexController@index')->name('dashboard.index');
    //Modals
    Route::post('parking', 'IndexController@parking')->name('parking.store');
    Route::post('residence', 'IndexController@residenceMembers')->name('residence.store');
    Route::post('permission', 'IndexController@permissionRequest')->name('permission.store');


    //Information Routes
    Route::get('information', 'InformationController@index')->name('dashboard.information');

    Route::post('information/notification', 'InformationController@notificationStore')->name('dashboard.notificationStore');
    Route::get('information/notification/delete/{id}', 'InformationController@NotificationDestroy')->name('dashboard.NotificationDestroy');

    Route::post('information/file', 'InformationController@fileStore')->name('dashboard.fileStore');
    Route::get('information/file/delete/{id}', 'InformationController@fileDestroy')->name('dashboard.fileDestroy');

    Route::post('information/contact', 'InformationController@contactStore')->name('dashboard.contactStore');
    Route::get('information/contact/delete/{id}', 'InformationController@contactDestroy')->name('dashboard.contactDestroy');


    Route::resource('units', 'UnitController');

    Route::resource('proceedings', 'ProceedingController');
    Route::get('proceedings/edit/{id}', 'ProceedingController@edit')->name('proceedings.edit');
    Route::get('proceedings/delete/{id}', 'ProceedingController@destroy')->name('proceedings.delete');

    Route::resource('enactments', 'EnactmentController');
    Route::get('enactments/delete/{id}', 'EnactmentController@destroy')->name('enactments.delete');

    Route::resource('costs', 'CostController');
    Route::get('costs/delete/{id}', 'CostController@destroy')->name('costs.delete');
    Route::resource('incomes', 'IncomeController');
    Route::get('incomes/delete/{id}', 'IncomeController@destroy')->name('incomes.delete');

    Route::resource('costHeading', 'CostHeadingController');
    Route::resource('incomeHeading', 'IncomeHeadingController');


    Route::get('charge', 'ChargeController@index')->name('charge.index');
    Route::get('charge/report', 'ChargeController@report')->name('charge.report.index');
    Route::post('charge/report', 'ChargeController@show')->name('charge.report.show');

    Route::get('invoices/excel', 'InvoiceController@downloadExcel')->name('invoices.downloadExcel');
    Route::post('invoices/excel', 'InvoiceController@uploadExcel')->name('invoices.uploadExcel');
    Route::get('invoices/excel/approve/{id}', 'InvoiceController@excelApprove')->name('invoices.excelApprove');
    Route::resource('invoices', 'InvoiceController');


    Route::resource('contracts', 'ContractController');
    Route::get('contract/delete/{id}', 'ContractController@destroy')->name('contracts.delete');
    Route::resource('tickets', 'TicketController');
    Route::get('ticket/approve/{ticket_id}', 'TicketController@approve')->name('ticket.approve');
    Route::resource('notifications', 'NotificationController');
    Route::resource('permission-requests', 'PermissionRequestController');
    Route::resource('traffic', 'TrafficController');
    Route::resource('comfort', 'ComfortController');
    Route::get('comfort/delete/{id}', 'ComfortController@destroy')->name('comfort.delete');
    Route::resource('gallery', 'GalleryController');
    Route::get('gallery/delete/{photo}', 'GalleryController@destroy')->name('gallery.delete');
    Route::post('gallery/search', 'GalleryController@search')->name('gallery.search');

    Route::resource('votes', 'VoteController');
    Route::get('vote/options/{id}', 'VoteController@optionsIndex')->name('options.index');
    Route::post('vote/submit/{id}', 'VoteController@submit')->name('vote.submit');
    Route::post('vote/options', 'VoteController@optionsStore')->name('options.optionsStore');


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

Route::get('/payment/{vahed}/{amount}/{id}/', 'PaymentController@pay');
Route::any('/paid/{vahed}/{amount}/{id}', 'PaymentController@paid');
