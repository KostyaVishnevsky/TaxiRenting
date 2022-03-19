<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


/*User*/
Route::middleware(['first'])->group(function(){
	Route::get('/order_registration', function () {
	    return view('welcome');
	});

	Route::get('/order/{id}', function () {
	    return view('welcome');
	});

	Route::match(['get','post'],'/settings', function () {
	    return view('welcome');
	});

});

Route::middleware(['first'])->group(function(){
	Route::match(['get','post'],'/sing_in', function () {
	    return view('welcome');
	});

	Route::match(['get','post'],'/sing_up', function () {
	    return view('welcome');
	});
});

/*Worker*/
Route::middleware(['first'])->group(function () {
	Route::get('/work_registration', function () {
	    return view('welcome');
	});

	Route::get('/task/{id}', function () {
	    return view('welcome');
	});

	Route::get('/tasks', function () {
	    return view('welcome');
	});
});
