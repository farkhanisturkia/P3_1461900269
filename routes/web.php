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
    return view('home0269');
});

Route::view('tampilkan0269','tampilkan0269');
Route::view('tamp_barang0269','tamp_barang0269');
Route::view('tamp_pelanggan0269','tamp_pelanggan0269');
Route::view('tamp_user0269','tamp_user0269');
Route::view('tamp_transaksi0269','tamp_transaksi0269');
