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

Route::get('/', 'HomeController@showWelcome');
Route::resource('members', 'MembersController');
Route::resource('subscriptions', 'SubscriptionsController');
Route::resource('contracts', 'ContractsController');
Route::get('/oauth/{provider?}', array(
		'as'=> 'oauth_' . Request::segment(2),
		'uses' => 'SocialLoginController@' . Str::camel(Request::segment(2))
	)
);
Route::get('/report', 'HomeController@showAdmin');