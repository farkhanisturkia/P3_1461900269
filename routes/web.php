<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;


Route::get('/', function () {
    return view('home0269');
});

Route::get('/tampilkan0269',[TokoController::class,'tamp_tran']);
Route::get('/tambahuser0269', [TokoController::class, 'tambah']);
Route::post('/user0269/insert','App\Http\Controllers\TokoController@insert')->name('insert');
