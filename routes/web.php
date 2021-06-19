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
    return view('landingpage');
});
// Route::get('/admin', function () {
//     return view('Admin/dashboard');
// });

//BukuTamu
Route::post('/create', 'TamuController@store')->name('create');
Route::get('/buku-tamu', 'TamuController@index')->name('bukutamu');
Route::get('/tamu', 'AdminController@index')->name('tamu');
//end
Auth::routes();

//Kritik&saran
Route::get('/kritik-saran', 'KritikController@index')->name('kritik-saran'); 
Route::post('/create-kritik', 'KritikController@store')->name('create-kritik');
Route::get('/data-kritik-saran', 'KritiksaranController@index' )->name('data-kritik-saran');
//end

//Jenis Tamu
Route::get('/jenis-tamu', 'JenistamuController@index')->name('jenis-tamu');
Route::get('/create-jenis-tamu', 'JenistamuController@create')->name('create-jenis-tamu');
Route::post('/simpan-jenis-tamu', 'JenistamuController@store')->name('simpan-jenis-tamu');
Route::get('/edit-jenis-tamu/{id}', 'JenistamuController@edit')->name('edit-jenis-tamu');
Route::post('/update-jenis-tamu/{id}', 'JenistamuController@update')->name('update-jenis-tamu');
Route::get('/delete-jenis-tamu/{id}', 'JenistamuController@destroy')->name('delete-jenis-tamu');
//end

//Laporan
Route::get('/cetak-tamu', 'TamuController@print')->name('cetak-tamu');
Route::get('/cetak-data-tamu-form', 'TamuController@printForm')->name('cetak-data-tamu-form');
Route::get('/cetak-data-pertanggal/{tglawal}/{tglakhir}', 'TamuController@printFormPertanggal')->name('cetak-data-pertanggal');
Route::get('data', 'TamuController@dataTamu')->name('data');
//end



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');

//Coba ttd
Route::get('laravel-signature-pad','SignatureController@index');
Route::post('laravel-signature-pad','SignatureController@store');

