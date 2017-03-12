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

Route::get('/', function (Request $request) {
    //return view('welcome');
	//$url = $request->path();
	return view('home', ['title' => 'test',
						 'SITE_URL' => 'http://localhost/projects/laravel/laravel54/mobilink5',
						'url' => 'http://localhost/projects/laravel/laravel54/mobilink5',
	]);
});
