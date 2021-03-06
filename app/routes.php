<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as'=>'home', 'uses'=>'KeywordsController@index'])->before('auth');

Route::get('login', ['uses'=>'SessionsController@create', 'as'=>'login']);
Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);

Route::group(array('before'=>'auth'), function() {

	Route::resource('keywords', 'KeywordsController');
	Route::resource('users', 'UsersController');

});

Route::post('twilio', 'TwilioController@index');