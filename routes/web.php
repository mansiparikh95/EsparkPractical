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
Route::get('application-form', 'ApplicationController@index')->name('application-form');
Route::post('application','ApplicationController@store')->name('application');

Auth::routes();

Route::middleware(['auth'])->group(function (){ 
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('logout','HomeController@logout')->name('logout');
	Route::group(['prefix' => 'admin','namespace' => 'admin'], function() {
		Route::resource('applications','ApplicationsController');
		Route::post('getdetails','ApplicationsController@postList')->name('getdetails'); 
	});
});


