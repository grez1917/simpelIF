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

#Login
Route::get('/','HomeController@index');
Route::get('/login', 'HomeController@login');
Route::get('/login', 'HomeController@login');

#Setting
Route::get('settings', 'SettingController@index');