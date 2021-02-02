<?php


// route for the users
//Route::post('/register','Auth\RegisterController@create')->name('register');
Route::get('','User\InformationController@index')->name('user');
Route::get('notfication','User\InformationController@notfication')->name('notfication');
Route::get('bill/index','User\userBillController@bill')->name('userBill');
Route::get('bill/pay/{id}','User\userBillController@pay')->name('userBill.pay');
Route::get('history','User\HistoryController@index')->name('seehistory');
Route::get('transaction','User\HistoryController@transaction')->name('seetransaction');
Route::get('history/show/{id}','User\HistoryController@show')->name('showbill');

Route::get('register/index','User\RegisterServiceController@index')->name('register.users');
Route::post('register/display/{id}','User\RegisterServiceController@display')->name('userregister.display');
Route::get('register/{id}','User\RegisterServiceController@show')->name('userregister.show');
Route::get('register/user/{id}','User\RegisterServiceController@register')->name('userregister.register'); 


?>