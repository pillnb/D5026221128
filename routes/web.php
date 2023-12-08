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

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
	return "<h1>Halo, Selamat datang</h1>";
});

Route::get('/blog2', function () {
    return view('blog');
});

Route::get('/5026221128', function () {
    return view('5026221128');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/uts', function () {
    return view('uts');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/js2', function () {
    return view('js2');
});

Route::get('/latihan1', function () {
    return view('latihan1');
});

Route::get('/link', function () {
    return view('link');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/responsive', function () {
    return view('responsive');
});

Route::get('/style', function () {
    return view('style');
});

Route::get('/validasi1', function () {
    return view('validasi1');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index') ;
Route::get('show', 'App\Http\Controllers\DosenController@showBlog') ;

//Route::get('/pegawai/{nama}', 'App\Http\Controllers\DosenController@shownama');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//route CRUD Sandal
Route::get('/sandal','App\Http\Controllers\SandalController@index');
Route::get('/sandal/tambahSandal','App\Http\Controllers\SandalController@tambah');
Route::post('/sandal/store','App\Http\Controllers\SandalController@store');
Route::get('/sandal/edit/{kodesandal}','App\Http\Controllers\SandalController@edit');
Route::post('/sandal/update','App\Http\Controllers\SandalController@update');
Route::get('/sandal/hapus/{kodesandal}','App\Http\Controllers\SandalController@hapus');

Route::get('/sandal/cari','App\Http\Controllers\SandalController@cari');
Route::get('/sandal/view/{kodesandal}','App\Http\Controllers\SandalController@view');
