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

Route::get('/', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/admin/petugas', function () {
    return view('admin/petugas');
});

Route::get('/admin/petugas/add', function () {
    return view('admin/petugas-add');
});

Route::get('/admin/transaksi', function () {
    return view('admin/transaksi');
});

