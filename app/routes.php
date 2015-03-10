<?php

// Tamu
Route::get('/','GuestController@index');
Route::get( 'login' , array( 'as' => 'guest.login' , 'uses' => 'GuestController@login' ));
Route::get('signup', array( 'as' => 'home.signup' , 'uses' => 'GuestController@signup' ));
Route::post('register' ,array( 'as' => 'guest.register' , 'uses' => 'GuestController@register' ));

// Dashboard atau Home
Route::get('dashboard' , array( 'before' => 'auth' , 'uses' => 'HomeController@dashboard' ));
Route::get('logout','HomeController@logout' );
Route::post('authenticate','HomeController@authenticate');

// Admin
Route:: group( array( 'prefix' => 'admin' , 'before' => 'admin' ), function(){
	Route::get('members','AdminsController@member');
//	Route::get('members',array('as'=>'admins.member','uses'=>'AdminsController@member'));
//	Route::resource('members','AdminsController');

});
//Route::get('members',array('as'=>'admins.member','uses'=>'AdminsController@member'));

// CS
Route:: group( array( 'prefix' => 'manager' , 'before' => 'manager' ), function(){
	
});

// Member
Route::get('/promo','HomeController@promo' );
