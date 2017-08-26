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
Route::get('/antrianonline', 'DashboardController@indexantrian');
Route::get('/siaplapor', 'DashboardController@indexsiaplapor');
Route::get('/undagi', 'DashboardController@indexundagi');

Route::group(['prefix' => 'antrianonline', 'middleware' => ['auth']], function () {
	Route::get('/pendaftaran', 'AntrianController@pendaftaran');
	Route::post('/pendaftaran', 'AntrianController@storependaftaran');
	Route::get('/riwayat', 'AntrianController@riwayat');

	Route::get('/meong', 'DashboardController@meong');

	//ajax
	Route::get('/ajax_layanan/{idizin}', 'AntrianController@ajax_layanan');
	Route::get('/ajax_loket/{idlayanan}', 'AntrianController@ajax_loket');
	Route::get('/ajax_waktu/{idloket}', 'AntrianController@ajax_waktu');
});

Route::group(['prefix' => 'siaplapor', 'middleware' => ['auth']], function () {
	Route::get('/pelaporan', 'LaporanController@pelaporan');
	Route::post('/pelaporan', 'LaporanController@storepelaporan');

	Route::get('/laporansaya', 'LaporanController@laporansaya');
});

Route::group(['prefix' => 'siaplapor', 'middleware' => ['auth']], function () {
	
});

Auth::routes();
