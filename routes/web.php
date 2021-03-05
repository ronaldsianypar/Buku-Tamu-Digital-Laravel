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
    return view('index');
});
// Route::get('/admin', function () {
//     return view('Admin/dashboard');
// });

Route::post('/create', 'TamuController@store')->name('create');
Route::get('/', 'TamuController@index')->name('');
Route::get('/tamu', 'AdminController@index')->name('tamu');

Auth::routes();

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

