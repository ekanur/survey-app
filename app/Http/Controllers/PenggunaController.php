<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Biodata_pengguna;
use App\Angket_pengguna;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view("pengguna/identitas");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function angket()
    {
      if(null == session("biodata_id")){
        session()->flash("msg", "Isikan biodata anda.");
        return redirect("/pengguna");
      }
      return view('pengguna/angket');

    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function simpanBiodata(Request $request){
      $biodata = new Biodata_pengguna;
      $biodata->jabatan_pengisi = $request->jabatan_pengisi;
      $biodata->nama_instansi = $request->nama_instansi;
      $biodata->tahun_berdiri = $request->tahun_berdiri;
      $biodata->skala_operasional = $request->skala_operasional;
      $biodata->jumlah_pegawai = $request->jumlah_pegawai;
      $biodata->jumlah_um = $request->jumlah_um;
      $biodata->email =$request->email;

      if($biodata->save()){
        // dd($biodata->id);
       session(["biodata_id" => $biodata->id]);
               // dd(session("biodata_id"));
       return redirect("/pengguna/angket");
     }
     else {
      return redirect()->back()->withInput();
    }
    
  }


  public function simpanAngket(Request $request){
    if(null == session("biodata_id")){
      session()->flash("msg", "Isikan biodata anda.");
      return redirect("/pengguna");
    }
    $data = $this->dataKuesioner($request->except("_token"));

    Angket_pengguna::insert($data);

    session()->forget("biodata_id");
    session()->flash("msg", "Terima kasih telah berpartisipasi mengisi angket.");
    return redirect("/");
  }

  function dataKuesioner($request){
        $biodata_id = session("biodata_id"); //diubah ke session hasil dari simpanBiodata
        $tahun = (null != session('tahun')) ? session('tahun') : date("Y") ;
        $data = array();
        $i=0;
        foreach ($request as $key => $value) {
          $data[$i]["biodata_pengguna_id"] = $biodata_id;
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
    $m_angket = new Angket_pengguna;

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

    //Pertanyaan 2: Rumusan VMTS Universitas
    $data_db = DB::table("angket_pengguna")
                ->select("value", DB::raw("COUNT(id) AS jumlah_responden"))
                ->where('kuesioner', 'q2')
                ->groupBy('value')
                ->get();
    $list_q2 = array(
              'kuesioner' => array(
                  'Katalog dan/atau dokumen jurusan lainnya' => 0, 
                  'Membaca banner' => 0, 
                  'Kegiatan kemahasiswaan' => 0, 
                  'Laman UM' => 0, 
                  'Lain-lain' => 0,
              ),
              'total_responden' => 0,
              'total_pilihan' => 0
            );
    foreach ($data_db as $row) {
      $arr_value = json_decode($row->value);
      
      if(!empty($arr_value)) {
        foreach ($arr_value as $jawaban) {
          $lain_exist = true;
          foreach ($list_q2['kuesioner'] as $pertanyaan => $jumlah) {
            if(strtolower($jawaban) == strtolower($pertanyaan)) {
              $list_q2['kuesioner'][$pertanyaan] += $row->jumlah_responden;
              $lain_exist = false;
            }
          }
          //tambahkan counter pilihan "Lain-lain" jika ada value custom
          $list_q2['kuesioner']['Lain-lain'] += ($lain_exist ? $row->jumlah_responden : 0);
          $list_q2['total_pilihan']++;
        }
      }

      $list_q2['total_responden'] += $row->jumlah_responden;
    }

    //Pertanyaan 3: Kinerja Universitas
    $data_db = DB::table("angket_pengguna")
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
    $data_db = DB::table("angket_pengguna")
                ->select("value", 
                  DB::raw("COUNT(id) AS jumlah_responden"), 
                  DB::raw("SUM(value::INT) AS jumlah_skor"))
                ->where('kuesioner', 'q5a')
                ->groupBy('value')
                ->get();
    $list_q5a = array(
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
      foreach ($list_q5a['kuesioner'] as $pertanyaan => $jumlah) {
        if(strtolower("skor_".$row->value) == strtolower($pertanyaan)) {
          $list_q5a['kuesioner'][$pertanyaan]['responden'] += $row->jumlah_responden;
          $list_q5a['kuesioner'][$pertanyaan]['skor'] += $row->jumlah_skor;
        }
      }
      $list_q5a['total_skor'] += $row->value;
      $list_q5a['total_responden'] += $row->jumlah_responden;
    }

    //Pertanyaan 4A, B, C, D, E, F, G: Jejaring, Kontribusi universitas, Kontribusi pengguna di akademik, Kontribusi pengguna di non-akademik (Kerjasama)
    $data_db = DB::table("angket_pengguna")
                ->select("value", 
                  DB::raw("COUNT(id) AS jumlah_responden"), 
                  DB::raw("SUM(value::INT) AS jumlah_skor"))
                ->whereIn('kuesioner', ['q4a', 'q4b', 'q4c', 'q4d', 'q4e','q4f','q4g'])
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
    
    //Pertanyaan 4F: Pembelajaran (Pendidikan)

    //Pertanyaan 4G: Keterlibatan (Penelitian)

    //Pertanyaan 4H: Keterlibatan (Pengadian kepada masyarakat)
    
    // print_r($data_db); print_r($list_q2); die();
    return view("pengguna.report", compact('list_q1', 'list_q2', 'list_q3', 'list_q4a', 'list_q5a'));
  }

    }

 