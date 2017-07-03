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

Route::get('/', 'DashboardController@index');

Route::group(['prefix' => 'antrianonline', 'middleware' => ['auth']], function () {
	Route::get('/', 'DashboardController@indexantrian');
});

Route::group(['prefix' => 'siaplapor', 'middleware' => ['auth']], function () {
	Route::get('/', 'DashboardController@indexsiaplapor');
});

Auth::routes();
