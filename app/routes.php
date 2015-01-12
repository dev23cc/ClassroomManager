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
Route::get('classrooms', 'ClassroomController@getAllClassrooms');
Route::any('home', 'HomeController@showWelcome');
Route::post('postlogin', array('as' => 'postlogin', 'uses' => 'UserController@postLogin'));
Route::post('postCreateTeacher', array('as' => 'postCreateTeacher', 'uses' => 'UserController@postCreateTeacher'));
Route::post('postCreateClassroom', array('as' => 'postCreateClassroom', 'uses' => 'ClassroomController@postCreateClassroom'));
Route::get('create-booking', array('as' => 'create-booking', 'uses' => 'BookingController@showBookingView'));
Route::get('delete-booking', array('as' => 'delete-booking', 'uses' => 'BookingController@showDeleteBookingView'));
Route::post('postCreateBooking', array('as' => 'postCreateBooking', 'uses' => 'BookingController@postCreateBooking'));
Route::get('login', function()
{

	return View::make('users.login');
});
Route::get('create-teacher', function()
{
	return View::make('users.create-teacher');
});

Route::get('create-classroom', function()
{
	return View::make('classrooms.create-classroom');
});
Route::get('logout', function()
{
	Auth::logout();
	return Redirect::to('home')->withInput()->with('success_logout', 'Αποσυνδεθήκατε με επιτυχία');
});



