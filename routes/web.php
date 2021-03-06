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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::match(["get", "post"], "/register", function(){
    return redirect('/login');
});

Route::resource('tunjangan', 'TunjanganController');

Route::resource('jabatan', 'JabatanController');

Route::resource('berita', 'BeritaController');

Route::resource('konten', 'KontenController');

Route::resource('karyawan', 'KaryawanController');

Route::get('list-karyawan', 'PenggajianController@index');

Route::get('create-gaji/{id}', 'PenggajianController@create_penggajian');

Route::post('post_penggajian', 'PenggajianController@store');

Route::get('riwayat_penggajian/{id}', 'PenggajianController@detail');


