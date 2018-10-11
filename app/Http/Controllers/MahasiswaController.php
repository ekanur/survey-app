<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Biodata_mahasiswa;
use App\Angket_mahasiswa;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // OLD JOSSO LOGIN
      /*$is_mahasiswa = DB::connection("pgsql_2")->table("pegawai.pegawai")->select("kd_pegawai")->where("nip", "=", session("userID"))->get();

      if(count($is_mahasiswa)!=0){
        session()->flash("msg", "Terjadi Kesalahan Mengambil data mahasiswa");
        return redirect("/servicelogout");
      }
      return redirect("/mahasiswa/angket"); */

      // SAML Login
      if(session("tipe") != 1){
        session()->flash("msg", "Terjadi Kesalahan Mengambil data mahasiswa");
        return redirect("/logout");
      }
      return redirect("/mahasiswa/angket"); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function angket()
    {
      if(null == session("userID")){
        session()->flash("msg", "Terjadi Kesalahan Mengambil data mahasiswa");
        return redirect("/");
      }
      return view('mahasiswa/angket');

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
/*
      $biodata = new Biodata_mahasiswa;
      $biodata->email = $request->email;
      $biodata->jenis_kelamin = $request->jeniskelamin;
      $biodata->jalur_masuk = $request->jalurmasuk;
      $biodata->tahun_masuk = $request->tahun_masuk;
      $biodata->jenjang_pendidikan = $request->jenjang_pendidikan;
      $biodata->pendornon = $request->pendornon;
      $biodata->prodi = $request->prodi;
      $biodata->jenis_pendidikan = $request->jenispend;


      if($biodata->save()){
        // dd($biodata->id);
       session(["biodata_id" => $biodata->id]);
               // dd(session("biodata_id"));
       return redirect("/mahasiswa/angket");
     }
     else {
      return redirect()->back()->withInput();
    }*/
  }


  public function simpanAngket(Request $request){
    if(null == session("userID")){
      session()->flash("msg", "Isikan biodata anda.");
      return redirect("/mahasiswa");
    }
    $data = $this->dataKuesioner($request->except("_token"));

    Angket_mahasiswa::insert($data);

    session()->forget("userID");
    session()->flash("msg", "Terima kasih telah berpartisipasi mengisi angket.");
    return redirect("/");
  }

  function dataKuesioner($request){
        $user_id = session("userID"); //diubah ke session hasil dari simpanBiodata
        $tahun = (null != session('tahun')) ? session('tahun') : date("Y") ;
        $data = array();
        $i=0;
        foreach ($request as $key => $value) {
          $data[$i]["mahasiswa_nim"] = $user_id;
          $data[$i]["tahun"] = $tahun;
          $data[$i]["kuesioner"] = $key;
          $data[$i]["value"] = (is_array($value))? json_encode($value) : $value;
          $data[$i]["created_at"] = date("Y-m-d");
          $i++;
        }

        // dd($data);

        return $data;
      }

      public function report()
      {
       $m_angket = new Angket_mahasiswa;

    //Pertanyaan 1: Pemahaman VTMS prodi
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

    //Pertanyaan 2: Rumusan VMTS prodi
        $data_db = DB::table("angket_mahasiswa")
        ->select("value", DB::raw("COUNT(id) AS jumlah_responden"))
        ->where('kuesioner', 'q2')
        ->groupBy('value')
        ->get();
        $list_q2 = array(
          'kuesioner' => array(
            'Masa Orientasi Maba' => 0,
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
      $list_q3 = array(
          'kuesioner' => array(
           'Kinerja sudah selaras dengan visi, misi, tujuan dan sasaran Program Studi dan Jurusan' => 0, 
           'Kinerja cukup selaras dengan visi, misi, tujuan dan sasaran Program Studi dan Jurusan' => 0, 
           'Kinerja kurang selaras dengan visi, misi, tujuan dan sasaran Program Studi dan Jurusan' => 0, 
           'Tidak tahu karena tidak mengetahui rumusan visi, misi, tujuan dan sasaran Program Studi dan Jurusan' => 0, 
           'Tidak tahu karena tidak pernah memperhatikan' => 0,
         ),
          'total_responden' => 0
        );
      $data_db = DB::table("angket_mahasiswa")
        ->select("value", DB::raw("COUNT(id) AS jumlah_responden"))
        ->where('kuesioner', 'q3')
        ->groupBy('value')
        ->get();

        foreach ($data_db as $row) {
          foreach ($list_q3['kuesioner'] as $pertanyaan => $jumlah) {
            if(strtolower($row->value) == strtolower($pertanyaan)) {
              $list_q3['kuesioner'][$pertanyaan] += $row->jumlah_responden;
            }
          }
          $list_q3['total_responden'] += $row->jumlah_responden;
        }

        $list_q4a1 = $this->kepuasan('angket_mahasiswa', ['q4a1','q4a2']);
        //$list_q4a2 = $this->kepuasan('angket_mahasiswa', 'q4a2');
        $list_q4a3 = $this->kepuasan('angket_mahasiswa', ['q4a3','q4a4','q4a5','q4a6','q4a7','q4a8','q4a9','q4a12','q4a13','q4a14','q4a15','q4a16']);
        // $list_q4a4 = $this->kepuasan('angket_mahasiswa', 'q4a4');
        // $list_q4a5 = $this->kepuasan('angket_mahasiswa', 'q4a5');
        // $list_q4a6 = $this->kepuasan('angket_mahasiswa', 'q4a6');
        // $list_q4a7 = $this->kepuasan('angket_mahasiswa', 'q4a7');
        // $list_q4a8 = $this->kepuasan('angket_mahasiswa', 'q4a8');
        // $list_q4a9 = $this->kepuasan('angket_mahasiswa', 'q4a9');
        $list_q4a10 = $this->kepuasan('angket_mahasiswa', 'q4a10');
        $list_q4a11 = $this->kepuasan('angket_mahasiswa', 'q4a11');
       // $list_q4a12 = $this->kepuasan('angket_mahasiswa', ['q4a12','q4a13','q4a14','q4a15','q4a16']);
        // $list_q4a13 = $this->kepuasan('angket_mahasiswa', 'q4a13');
        // $list_q4a14 = $this->kepuasan('angket_mahasiswa', 'q4a14');
        // $list_q4a15 = $this->kepuasan('angket_mahasiswa', 'q4a15');
        // $list_q4a16 = $this->kepuasan('angket_mahasiswa', 'q4a16');
        $list_q4b1 = $this->kepuasan('angket_mahasiswa', ['q4b1','q4b2','q4b3']);
        // $list_q4b2 = $this->kepuasan('angket_mahasiswa', 'q4b2');
        // $list_q4b3 = $this->kepuasan('angket_mahasiswa', 'q4b3');
        $list_q4b4 = $this->kepuasan('angket_mahasiswa', ['q4b4','q4b5','q4b6','q4b7','q4b8','q4b9','q4b10','q4b11','q4b12']);
        // $list_q4b5 = $this->kepuasan('angket_mahasiswa', 'q4b5');
        // $list_q4b6 = $this->kepuasan('angket_mahasiswa', 'q4b6');
        // $list_q4b7 = $this->kepuasan('angket_mahasiswa', 'q4b7');
        // $list_q4b8 = $this->kepuasan('angket_mahasiswa', 'q4b8');
        // $list_q4b9 = $this->kepuasan('angket_mahasiswa', 'q4b9');
        // $list_q4b10 = $this->kepuasan('angket_mahasiswa', 'q4b10');
        // $list_q4b11 = $this->kepuasan('angket_mahasiswa', 'q4b11');
        // $list_q4b12 = $this->kepuasan('angket_mahasiswa', 'q4b12');

        return view("mahasiswa.report", compact('list_q1','list_q2','list_q3','list_q4a1','list_q4a2','list_q4a3','list_q4a4','list_q4a5','list_q4a6','list_q4a7','list_q4a8','list_q4a9','list_q4a10','list_q4a11','list_q4a12','list_q4a13','list_q4a14','list_q4a15','list_q4a16','list_q4b1','list_q4b2','list_q4b3','list_q4b4','list_q4b5','list_q4b5','list_q4b6','list_q4b7','list_q4b8','list_q4b9','list_q4b10','list_q4b11','list_q4b12'));

      }

    }