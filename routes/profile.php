<?php

//Route::get('/user/start','User\UserProfileController@starttransaction')->name('starttransaction');
Route::get('/profile','UserProfileController@index')->name('userprofile');
Route::get('/transfer','TransactionController@index')->name('moneytransfer');
Route::post('/deposite/start','TransactionController@deposite')->name('startdeposite');
Route::post('/withdraw/start','TransactionController@withdraw')->name('startwithdraw');
Route::get('/profile/deposite','UserProfileController@deposite')->name('deposite');
Route::get('/profile/edit','UserProfileController@edit')->name('usereditprofile');
Route::post('/profile/update/{id}','UserProfileController@update')->name('updateuserprofile');
Route::get('/profile/withdraw','UserProfileController@withdraw')->name('withdraw');
Route::get('/profile/changepass','UserProfileController@changepass')->name('changepassword');
Route::post('/profile/updatepassword','UserProfileController@updatepass')->name('updatepassword');



?>