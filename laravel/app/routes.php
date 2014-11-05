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

/*Route::get('/', function()
{
	return View::make('hello');
});¨*/

/*
|
|	HOME ROUTES
|
*/
Route::get('/', function() {
	if (!Auth::check())
		return View::make('landing');
	else
		return View::make('home');
});
Route::post('/', 'SessionsController@store');
/*
|
|	USER ROUTES
|
*/
Route::resource('users', 'UsersController');

Route::get('register', 'UsersController@create');
Route::post('register', 'UsersController@store');

/*
Route::get('login', 'SessionsController@create');*/

Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController');
Route::get('users', function() {
    $users = User::all();
    return View::make('users')->with('users', $users);
});
/*
|
|	CONFIGURATIONS
|
*/
Route::get('profile', function() {
    $user = Auth::user()->username;
    return View::make('profile')->with('user', $user);
});
Route::post('profile/username', 'UsersController@updateUsername');
Route::post('profile/password', 'UsersController@updatePassword');

Route::controller('friends', 'FriendsController');
