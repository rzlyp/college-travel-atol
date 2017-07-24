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

Route::get('/', 'Auth\LoginController@getLogin');
Route::post('/','Auth\LoginController@postLogin');
Route::group(['prefix' => 'admin','middleware' => 'web'], function () {
	Route::get('/', 'AdminController@dashboard');

	Route::get('/petugas', 'UsersController@getPetugas');

	Route::get('/petugas/add', 'UsersController@getAddPetugas');

	Route::post('/petugas/add', 'UsersController@postPetugas');
	Route::get('/petugas/update/{id}', 'UsersController@getUpdate');
	Route::post('/petugas/update/{id}', 'UsersController@postUpdate');
	Route::get('/petugas/delete/{id}', 'UsersController@delete');
	Route::get('/petugas/search', 'UsersController@getCari');
	Route::post('/petugas/search', 'UsersController@postCari');
	Route::get('/transaksi', 'TransaksiController@getTransaksi');
	Route::get('/transaksi/search', 'TransaksiController@getCari');
	Route::post('/transaksi/search', 'TransaksiController@postCari');
	
	Route::get('/kendaraan', 'KendaraanController@getKendaraanAdmin');
	Route::get('/kendaraan/search', 'KendaraanController@getCari');
	Route::post('/kendaraan/search', 'KendaraanController@postCari');
	Route::get('/kendaraan/add', 'KendaraanController@getAddAdmin');
	Route::post('/kendaraan/add', 'KendaraanController@postAddAdmin');

});

Route::group(['prefix' => 'petugas','middleware' => 'web'], function () {
	Route::get('/', 'TransaksiController@getDashboard');
	Route::get('/kendaraan', 'KendaraanController@getKendaraan');

	Route::get('/kendaraan/add', 'KendaraanController@getAdd');
	Route::post('/kendaraan/add', 'KendaraanController@postAdd');
	Route::get('/kendaraan/update/{id}', 'KendaraanController@getUpdate');
	Route::post('/kendaraan/update/{id}', 'KendaraanController@postUpdate');
	Route::get('/kendaraan/delete/{id}', 'KendaraanController@delete');
	
	Route::get('/kendaraan/search', 'KendaraanController@getCari');
	Route::post('/kendaraan/search', 'KendaraanController@postCari');

	Route::get('/tujuan', 'TujuanController@getTujuan');
	Route::get('/tujuan/add', 'TujuanController@getAdd');
	Route::post('/tujuan/add', 'TujuanController@postAdd');
	Route::get('/tujuan/update/{id}', 'TujuanController@getUpdate');
	Route::post('/tujuan/update/{id}', 'TujuanController@postUpdate');
	Route::post('/tujuan/delete/{id}', 'TujuanController@delete');
	Route::get('/tujuan/search', 'TujuanController@getCari');
	Route::post('/tujuan/search', 'TujuanController@postCari');
	
	Route::get('/transaksi','TransaksiController@getTransaksi');
	Route::get('/transaksi/search', 'TransaksiController@getCari');
	Route::post('/transaksi/search', 'TransaksiController@postCari');
});

Route::get('/redirect', function(){
	return redirect('/petugas');
});
Route::get('/print','TransaksiController@toPDF');
Route::post('/tiket/save','TransaksiController@postPemesanan');
Route::get('/harga/{id}','TransaksiController@getPrice');
Route::get('/logout','Auth\LoginController@logout');

