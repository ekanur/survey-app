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

Route::get('/dosen','DosenController@index')->name('dosen');

Route::get("/ubah-tahun/{tahun}", "DashboardController@ubahTahun");

Route::get('dosen/angket', 'DosenController@angket');

Route::post("biodata-dosen", "DosenController@simpanBiodata");
Route::post("angket-dosen", "DosenController@simpanAngket");
