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
Route::get('/pengaduan', 'PengaduanController@index')->name('Pengaduan.index');
Route::get('/pengaduan/create', 'PengaduanController@create')->name('Pengaduan.create');
Route::post('/pengaduan/store', 'PengaduanController@store')->name('Pengaduan.store');
Route::get('/pengaduan/edit{id_pengaduan}', 'PengaduanController@edit');
Route::get('/pengaduan/destroy{id_pengaduan}', 'PengaduanController@destroy');
Route::GET('/pengaduan/update{id_pengaduan}', 'PengaduanController@update');
Route::get('/beranda','BerandaController@index');
Route::get('/login', function () {
    return view('user.login');
});
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');

