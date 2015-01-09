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
Route::get('classrooms', 'HomeController@showClassrooms');
Route::any('home', 'HomeController@showWelcome');
Route::post('postlogin', array('as' => 'postlogin', 'uses' => 'UserController@postLogin'));
Route::get('bar', function()
{
	return View::make('hello');
});
Route::get('login', function()
{
	return View::make('users.login');
});

Route::get('logout', function()
{
	Auth::logout();
	return Redirect::to('home')->withInput()->with('success_logout', 'Logged out successfully ');
});
Route::post('login', function () { });


Route::get('profile', array('as' => 'profile', function () { }));