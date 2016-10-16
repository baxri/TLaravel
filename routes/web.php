<?php

Auth::routes();

Route::group(['middleware' => 'auth'], function(){

	Route::get('/', function(){
		return view('home');
	});

	Route::get('/home', function(){
		return view('home');
	});

});

