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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

#Login
Route::get('/','HomeController@index');
Route::get('/login', 'HomeController@login');
Route::post('/login', array('before' => 'csrf', 'uses' => 'HomeController@login'));
Route::get('/logout', 'HomeController@logout');

#Setting
Route::get('settings', 'SettingController@index');
Route::get('settings/profile', 'SettingController@profile');
Route::get('settings/password', 'SettingController@password');
Route::get('settings/email', 'SettingController@email');