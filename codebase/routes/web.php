<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
	return view('home', ['SITE_URL' => 'http://localhost/projects/laravel/laravel54/spoc']);
});*/

Route::get('/', "OrderController@index");
Route::get('/guzzletest', "OrderController@guzzletest");