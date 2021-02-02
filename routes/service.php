<?php 




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

?>