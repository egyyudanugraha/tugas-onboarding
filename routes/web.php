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

Route::get('/', '\App\Http\Controllers\CrudController@home');

Route::get('/home', '\App\Http\Controllers\CrudController@home');

Route::get('/tabel','\App\Http\Controllers\CrudController@index');

Route::get('/cari/{id}','\App\Http\Controllers\CrudController@cari');

Route::post('/tambah','\App\Http\Controllers\CrudController@tambah');

Route::get('/hapus/{id}','\App\Http\Controllers\CrudController@hapus');

Route::get('/show/{id}','\App\Http\Controllers\CrudController@show');

Route::post('/edit','\App\Http\Controllers\CrudController@edit');
