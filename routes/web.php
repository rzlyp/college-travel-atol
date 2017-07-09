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
	Route::get('/', function () {
	    return view('admin/index');
	});

	Route::get('/petugas', 'UsersController@getPetugas');

	Route::get('/petugas/add', 'UsersController@getAddPetugas');

	Route::post('/petugas/add', 'UsersController@postPetugas');
	Route::get('/petugas/update/{id}', 'UsersController@getUpdate');
	Route::post('/petugas/update/{id}', 'UsersController@postUpdate');
	Route::get('/petugas/delete/{id}', 'UsersController@delete');
	Route::get('/transaksi', function () {
	    return view('admin/transaksi');
	});

});

Route::group(['prefix' => 'petugas','middleware' => 'web'], function () {
	Route::get('/', function () {
	    return view('petugas/tiket');
	});

	Route::get('/kendaraan', 'KendaraanController@getKendaraan');

	Route::get('/kendaraan/add', 'KendaraanController@getAdd');
	Route::post('/kendaraan/add', 'KendaraanController@postAdd');
	Route::get('/kendaraan/update/{id}', 'KendaraanController@getUpdate');
	Route::post('/kendaraan/update/{id}', 'KendaraanController@postUpdate');
	Route::post('/kendaraan/delete/{id}', 'KendaraanController@delete');

	Route::get('/tujuan', 'TujuanController@getTujuan');

	Route::get('/tujuan/add', 'TujuanController@getAdd');
	Route::post('/tujuan/add', 'TujuanController@postAdd');
	Route::get('/tujuan/update/{id}', 'TujuanController@getUpdate');
	Route::post('/tujuan/update/{id}', 'TujuanController@postUpdate');
	Route::post('/tujuan/delete/{id}', 'TujuanController@delete');
	
	Route::get('/transaksi', function () {
	    return view('petugas/transaksi');
	});

});



Route::get('/logout','Auth\LoginController@logout');