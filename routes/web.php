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

// pengaduan
Route::post('/simpan-pengaduan', 'PengaduanController@store')->name('simpan-pengaduan');
Route::get('/pengaduan/edit/{id_pengaduan}', 'PengaduanController@edit');
Route::get('/pengaduan/destroy/{id_pengaduan}', 'PengaduanController@destroy');
Route::put('/pengaduan/update/{id_pengaduan}', 'PengaduanController@update');
Route::get('/pengaduan','PengaduanController@index');
Route::get('/pengaduan/create','PengaduanController@create');
Route::post('/pengaduan/store','PengaduanController@store');

// template
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/beranda','BerandaController@index');
Route::get('/login', function () {
    return view('user.login');
});
Route::get('/', function () {
    return view('landing');
});


//Tanggapan
Route::get('/tanggapan','TanggapanController@index');
Route::get('/tanggapan/create','TanggapanController@create');
Route::post('/tanggapan/store','TanggapanController@store')->name('simpan-tanggapan');
Route::get('/tanggapan/delete/{id_tanggapan}','TanggapanController@destroy');

// Route::post('/tanggapan/store','TanggapanController@store');
// Route::post('/tanggapan/edit/{id_tanggapan}','TanggapanController@edit');
// Route::GET('/tanggapan/update/{id_tanggapan}','TanggapanController@update');
// Route::post('/tanggapan/hapus/{id_tanggapan}','TanggapanController@destroy');
// Route::post('/tanggapan/detail/{id_tanggapan}','TanggapanController@show');

// cetak
Route::get('/cetak-pengaduan','PengaduanController@cetakform')->name('cetak-pengaduan');
Route::get('/cetak_pdf/{id_pengaduan}','PengaduanController@cetak_pdf')->name('cetak-pengaduan-pertanggal');





