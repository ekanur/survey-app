<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


// use App\Angket_mitra;

class AdminController extends Controller
{

  public function index() {
    $menu = 'beranda';
    $count['dosen'] = DB::table("angket_dosen")->select(DB::raw("DISTINCT dosen_nip as count"))->get()->count();
    $count['mahasiswa'] = DB::table("angket_mahasiswa")->select(DB::raw("DISTINCT mahasiswa_nim as count"))->get()->count();
    $count['alumni'] = DB::table("biodata_alumni")->count();
    $count['tendik'] = DB::table("angket_tendik")->select(DB::raw("DISTINCT tendik_nip as count"))->get()->count();
    $count['pengguna'] = DB::table("biodata_pengguna")->count();
    $count['mitra'] = DB::table("biodata_mitra")->count();
  //dd($count);
    return view('admin.dashboard', compact('count', 'menu'));
  }

  public function rekapitulasi() {
    $menu = 'rekap';
    return view('admin.rekapitulasi', compact('menu'));
  }

  //Fungsi dibawah belum dipakai. Nantinya akan digunakan untuk menampilkan daftar responden di sisi admin
  /*public function responden() {
    $menu = 'responden';
    return view('admin.responden');
  }

  public function get_datatable_responden(Request $request) {
    //cek apakah request adalah asynchronous
    if($request->ajax()) {

    }
  }*/
}
