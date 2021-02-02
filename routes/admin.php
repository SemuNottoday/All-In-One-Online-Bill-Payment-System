<?php 


	Route::resource('user', 'Admin\UserController',
				['as'=>'admin']);
    Route::get('index','Admin\AdminController@index')
                ->name('adminhome');
    Route::resource('service', 'Admin\ServiceController',
				['as'=>'admin']);
    Route::resource('manager', 'Admin\AddmanagerController',
				['as'=>'admin']);
    Route::resource('bank', 'Admin\BankController',
				['as'=>'admin']);
    Route::view('calander','admin\user\todolist')
                ->name('calander');
    Route::get('information','Admin\InformationController@index')
				->name('information');
    Route::get('information/system',
	'Admin\InformationController@index2')
				->name('systeminfo');
    Route::get('information/database',
	'Admin\InformationController@index3')
				->name('databaseinfo');
    Route::get('information/transaction',
	'Admin\InformationController@index4')
				->name('transactioninfo');
    Route::POST('email/send/{id}','Admin\MailController@send')->name('sendmailtomanager');
    Route::get('email','Admin\MailController@index')->name('sendmail');
    Route::get('email/create/{id}','Admin\MailController@create')->name('mailmanager'); 
    Route::get('email/customer','Admin\MailController@mailcustomer')->name('sendtocustomer');
    Route::POST('email/customer/send','Admin\MailController@sendcustomer')->name('sendmailtocustomer');
    Route::get('listuser','Admin\UserController@filter')->name('FilterUser');

    Route::get('school/{name}','Admin\SchoolInfoController@index')->name('schoolinfo');
    Route::post('school/','Admin\SchoolInfoController@store')->name('schoolinfostore');

?>