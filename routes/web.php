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

Route::get('/', 'DashboardController@index');
Route::get("/ubah-tahun/{tahun}", "DashboardController@ubahTahun");

//dosen
Route::get('/dosen','DosenController@index')->name('dosen');
Route::get('dosen/angket', 'DosenController@angket');
Route::post("biodata-dosen", "DosenController@simpanBiodata");
Route::post("angket-dosen", "DosenController@simpanAngket");

// mahasiswa
Route::get('mahasiswa', "MahasiswaController@index")->name('mahasiswa');
Route::get('mahasiswa/angket', "MahasiswaController@angket");
Route::post("biodata-mahasiswa", "MahasiswaController@simpanBiodata");
Route::post("angket-mahasiswa", "MahasiswaController@simpanAngket");

// tendik
Route::get('tendik', "TendikController@index")->name('tendik');
Route::get('tendik/angket', "TendikController@angket");
Route::post("biodata-tendik", "TendikController@simpanBiodata");
Route::post("angket-tendik", "TendikController@simpanAngket");

// alumni
Route::get('/alumni','AlumniController@index')->name('alumni');
Route::get('alumni/angket', 'AlumniController@angket');
Route::post("biodata-alumni", "AlumniController@simpanBiodata");
Route::post("angket-alumni", "AlumniController@simpanAngket");

//pengguna
Route::get('pengguna', "PenggunaController@index")->name('pengguna');
Route::get('pengguna/angket', "PenggunaController@angket");
Route::post('biodata-pengguna', "PenggunaController@simpanBiodata");
Route::post('angket-pengguna', "PenggunaController@simpanAngket");

// mitra
Route::get('mitra', "MitraController@index")->name('mitra');
Route::get('mitra/angket', "MitraController@angket");
Route::post("biodata-mitra", "MitraController@simpanBiodata");
Route::post("angket-mitra", "MitraController@simpanAngket");
