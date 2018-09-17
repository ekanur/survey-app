<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

use App\Biodata_mitra;
use App\Angket_mitra;

class MitraController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index() {
    return view("mitra/identitas");
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */

  public function angket() {
    if(null == session("biodata_id")) {
      session()->flash("msg", "Isikan biodata anda.");
      return redirect("/mitra");
    }
    return view('mitra/angket');

  }


  public function create() {
  //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request) {

  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id) {
  //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id) {
  //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id) {
  //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id) {
  //
  }

  public function simpanBiodata(Request $request) {
    $biodata = new Biodata_mitra;
    $biodata->jabatan_pengisi = $request->jabatan_pengisi;
    $biodata->nama_instansi = $request->nama_instansi;
    $biodata->no_telp = $request->no_telp;
    $biodata->tahun_berdiri = $request->tahun_berdiri;
    $biodata->skala_operasional = $request->skala_operasional;
    $biodata->tahun_kerjasama = $request->tahun_kerjasama;

    if($biodata->save()){
      session(["biodata_id" => $biodata->id]);
      return redirect("/mitra/angket");
    }
    else {
      return redirect()->back()->withInput();
    }

  }


  public function simpanAngket(Request $request) {
    if(null == session("biodata_id")){
      session()->flash("msg", "Isikan biodata anda.");
      return redirect("/mitra");
    }
    $data = $this->dataKuesioner($request->except("_token"));

    Angket_mitra::insert($data);

    session()->forget("dosen_id");
    session()->flash("msg", "Terima kasih telah berpartisipasi mengisi angket.");
    return redirect("/");
  }

  public function dataKuesioner($request) {
    $biodata_id = session("biodata_id"); //diubah ke session hasil dari simpanBiodata
    $tahun = (null != session('tahun')) ? session('tahun') : date("Y");
    $data = array();
    $i=0;
    foreach ($request as $key => $value) {
      $data[$i]["biodata_mitra_id"] = $biodata_id;
      $data[$i]["tahun"] = $tahun;
      $data[$i]["kuesioner"] = $key;
      $data[$i]["value"] = (is_array($value))? json_encode($value) : $value;
      $data[$i]["created_at"] = date("Y-m-d");
      $i++;
    }

    // dd($data);

    return $data;
  }

  public function report() {
    $m_angket = new Angket_mitra;

    //Pertanyaan 1: Pemahaman VTMS Universitas
    $data_db = $m_angket->where('kuesioner', 'q1')->get();
    $list_q1 = array(
              'jumlah_ya' => 0, 
              'jumlah_tidak' => 0, 
              'total_responden' => count($data_db)
            );
    foreach ($data_db as $row) {
      if(strtolower($row->value) == 'ya') {
        $list_q1['jumlah_ya']++;
      }
      else if(strtolower($row->value) == 'tidak') {
        $list_q1['jumlah_tidak']++;
      }
    }

    //Pertanyaan 3: Kinerja Universitas
    $data_db = DB::table("angket_mitra")
                ->select("value", DB::raw("COUNT(id) AS jumlah_responden"))
                ->where('kuesioner', 'q3')
                ->groupBy('value')
                ->get();
    $list_q3 = array(
              'kuesioner' => array(
                  'Sudah selaras dengan visi dan kinerja sudah maksimal' => 0, 
                  'Sudah selaras dengan visi, namun kinerja kurang maksimal' => 0, 
                  'Kurang selaras dengan visi, namun kinerja maksimal' => 0, 
                  'Kurang selaras dengan visi dan kinerja kurang maksimal' => 0, 
                  'Tidak tahu karena tidak mengetahui rumusan visi/misi jurusan' => 0, 
                  'Tidak tahu karena tidak pernah memperhatikan' => 0,
              ),
              'total_responden' => 0
            );
    foreach ($data_db as $row) {
      foreach ($list_q3['kuesioner'] as $pertanyaan => $jumlah) {
        if(strtolower($row->value) == strtolower($pertanyaan)) {
          $list_q3['kuesioner'][$pertanyaan] += $row->jumlah_responden;
        }
      }
      $list_q3['total_responden'] += $row->jumlah_responden;
    }

    //Pertanyaan 4A: Profil Universitas (VMTS)
    $data_db = DB::table("angket_mitra")
                ->select("value", 
                  DB::raw("COUNT(id) AS jumlah_responden"), 
                  DB::raw("SUM(value::INT) AS jumlah_skor"))
                ->where('kuesioner', 'q4a')
                ->groupBy('value')
                ->get();
    $list_q4a = array(
              'kuesioner' => array(
                  'skor_4' => ["alias" => 'Sangat Puas',"responden" => 0, "skor" => 0],
                  'skor_3' => ["alias" => 'Puas',"responden" => 0, "skor" => 0], 
                  'skor_2' => ["alias" => 'Cukup Puas',"responden" => 0, "skor" => 0], 
                  'skor_1' => ["alias" => 'Tidak Puas', "responden" => 0, "skor" => 0] 
                ),
              'total_skor' => 0,
              'total_responden' => 0
            );
    foreach ($data_db as $row) {
      foreach ($list_q4a['kuesioner'] as $pertanyaan => $jumlah) {
        if(strtolower("skor_".$row->value) == strtolower($pertanyaan)) {
          $list_q4a['kuesioner'][$pertanyaan]['responden'] += $row->jumlah_responden;
          $list_q4a['kuesioner'][$pertanyaan]['skor'] += $row->jumlah_skor;
        }
      }
      $list_q4a['total_skor'] += $row->value;
      $list_q4a['total_responden'] += $row->jumlah_responden;
    }

    //Pertanyaan 4B, C, D, E: Jejaring, Kontribusi universitas, Kontribusi pengguna di akademik, Kontribusi pengguna di non-akademik (Kerjasama)
    
    //Pertanyaan 4F: Pembelajaran (Pendidikan)

    //Pertanyaan 4G: Keterlibatan (Penelitian)

    //Pertanyaan 4H: Keterlibatan (Pengadian kepada masyarakat)
    
    // print_r($data_db); print_r($list_q4a); die();
    return view("mitra.report", compact('list_q1', 'list_q3', 'list_q4a'));
  }

}
