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

    Route::get("error", "Controller@error");

//TESTER
// Route::group(['middleware' => ['samlauth']], function () {
  //protected routes go here
	
	Route::get('/logout', 'Controller@logout');
	// Route::get('loggedin', 'DosenController@loggedin');

// });
//TESTER END


Route::get('/', 'DashboardController@index');
Route::get("ubah-tahun/{tahun}", "DashboardController@ubahTahun");

//admin
Route::get('admin', 'admin\AdminController@index');
Route::get('admin/rekapitulasi', 'admin\AdminController@rekapitulasi');
Route::get("admin/rekap/dosen", "DosenController@report");
Route::get("admin/rekap/mahasiswa", "MahasiswaController@report");
route::get("admin/rekap/alumni","AlumniController@report");
Route::get("admin/rekap/tendik", "TendikController@report");
Route::get("admin/rekap/pengguna", "PenggunaController@report");
Route::get("admin/rekap/mitra", "MitraController@report");
Route::get('admin/responden', 'admin\AdminController@responden');
Route::get("admin/responden/dosen", "DosenController@responden");
Route::get("admin/responden/mahasiswa", "MahasiswaController@responden");
Route::get("admin/responden/tendik", "TendikController@responden");
Route::get("admin/responden/alumni", "AlumniController@responden");
Route::get("admin/responden/pengguna", "PenggunaController@responden");
Route::get("admin/responden/mitra", "MitraController@responden");
Route::post("admin/responden/dosen/get_datatable", "DosenController@get_datatable_responden");
Route::post("admin/responden/mahasiswa/get_datatable", "MahasiswaController@get_datatable_responden");
Route::post("admin/responden/tendik/get_datatable", "TendikController@get_datatable_responden");
Route::post("admin/responden/alumni/get_datatable", "AlumniController@get_datatable_responden");
Route::post("admin/responden/pengguna/get_datatable", "PenggunaController@get_datatable_responden");
Route::post("admin/responden/mitra/get_datatable", "MitraController@get_datatable_responden");

/*Route::get("admin/responden/dosen", "DosenController@list_responden");
Route::get("admin/responden/tendik", "TendikController@responden");
Route::get("admin/responden/mahasiswa", "MahasiswaController@list_responden");
route::get("admin/responden/alumni","AlumniController@list_responden");
Route::get("admin/responden/pengguna", "PenggunaController@list_responden");
Route::get("admin/responden/mitra", "MitraController@list_responden");
*/

//dosen
Route::group(['middleware' => 'samlauth'], function() {
	Route::get('/dosen', 'DosenController@index');
	// Route::get('/dosen','DosenController@index')->name('dosen');
	Route::get('dosen/angket', 'DosenController@angket');	
	Route::post("angket-dosen", "DosenController@simpanAngket");

	//BKD (Milik Bu Rini
	Route::get('/bkd', 'BkdController@index');
	Route::get('bkd/angket', 'BkdController@angket');	
	Route::post("angket-bkd", "BkdController@simpanAngket");
	
	Route::get('mahasiswa', "MahasiswaController@index")->name('mahasiswa');
	Route::post("angket-mahasiswa", "MahasiswaController@simpanAngket");
	Route::get('mahasiswa/angket', "MahasiswaController@angket");

	Route::get('tendik', "TendikController@index")->name('tendik');
	Route::get('tendik/angket', "TendikController@angket");
	Route::post("angket-tendik", "TendikController@simpanAngket");
});


Route::post("biodata-dosen", "DosenController@simpanBiodata");
// Route::get("dosen/report", "DosenController@report");

//dosen
//Route::get('dosen','DosenController@index')->name('dosen');
//Route::get('dosen/angket', 'DosenController@angket');


//Route::post("biodata-dosen", "DosenController@simpanBiodata");
//Route::post("angket-dosen", "DosenController@simpanAngket");

// mahasiswa

Route::post("biodata-mahasiswa", "MahasiswaController@simpanBiodata");


// tendik
Route::post("biodata-tendik", "TendikController@simpanBiodata");


// alumni
Route::get('alumni','AlumniController@index')->name('alumni');
Route::get('alumni/angket', 'AlumniController@angket');
Route::post("biodata-alumni", "AlumniController@simpanBiodata");
Route::post("angket-alumni", "AlumniController@simpanAngket");

// route::get("alumni/report","AlumniController@report");

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
// =======


