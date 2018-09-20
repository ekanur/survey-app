<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


// use App\Angket_mitra;

class AdminController extends Controller
{
    //
  public function index() {
    $count['dosen'] = DB::table("biodata_dosen")->count();
    $count['mahasiswa'] = DB::table("biodata_mahasiswa")->count();
    $count['alumni'] = DB::table("biodata_alumni")->count();
    $count['tendik'] = DB::table("biodata_tendik")->count();
    $count['pengguna'] = DB::table("biodata_pengguna")->count();
    $count['mitra'] = DB::table("biodata_mitra")->count();

    return view('admin.dashboard', compact('count'));
  }

  public function rekapitulasi() {
    return view('admin.rekapitulasi');
  }

  public function responden() {
    return view('admin.responden');
  }

  public function get_datatable_responden(Request $request) {
    //cek apakah request adalah asynchronous
    if($request->ajax()) {

    }
  }
}
