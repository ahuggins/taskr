<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@home');
Route::resource('list', 'ListController');
Route::get('sign-up', function() {
	return view('app.content.signup');
});
Route::get('sign-in', 'UserController@login');
Route::post('login', 'UserController@attempt');
Route::post('sign-up', 'UserController@create');
Route::get('logout', 'UserController@logout');

Route::controller('api', 'TaskController');
