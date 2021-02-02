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


it is used in transaction page, to separate each user and display appropriate
@extends((Auth::user()->service->group)==1 ? 'layouts.user' : ((Auth::user()->service->group)==2) ? 'layouts.admin' : 'layouts.service'))




*/
use Barryvdh\DomPDF\PDF;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pdf/{id}','PdfController@index')->name('printreceipt')->middleware('preventbackbutton');

Route::get('/','GuestController@index');
// Route for error messages in all pages
Route::view('error','errors.unauthorized')->name('unauthorized');
Route::post('send','WelcomeController@index')->name('suggestionmail');
Route::view('/try','tryinterface');

Route::get('/about', function () {
    return view('about');
});

Auth::routes();



// route for service admin 
Route::resource('ServiceUser','Service\ServiceUserController');
Route::resource('ServiceNotification','Service\NotificationController');
Route::resource('ServiceNews','Service\NewsController');
Route::resource('ServiceBill','Service\BillController');
Route::post('service/ImportExcel/user','service\ImportExcelController@import_user')->name('ImportUser');
Route::post('service/ImportExcel/bill','service\ImportExcelController@import_bill')->name('ImportBill');
Route::post('service/Filter','service\FilterController@index')->name('Filter');
Route::get('service/UserRegisterController/{id}','service\UserRegisterController@index')->name('UserRegister.index');
Route::get('TestsController/{id}','TestsController@index')->name('Tests.index');
Route::post('service/UserRegisterController/{id}','service\UserRegisterController@store')->name('UserRegister.store');
Route::get('service/History/index','Service\HistoryController@index')->name('History.index');
Route::get('service/Mail/index','Service\MailServiceController@index')->name('Mail.index');
Route::post('service/Mail/send','Service\MailServiceController@send')->name('Mail.send');

Route::view('/manage_service_user', 'service/manageUser');
Route::view('/notifay', 'service/notifay');
Route::view('/send_bill', 'service/send_bill');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
    $a='is best';
    return view('test');
});
Route::post('/test', 'TestsController@store');
Route::get('/relation', 'TestsController@relation');



