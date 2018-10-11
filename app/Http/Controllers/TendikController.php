<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Biodata_tendik;
use App\Angket_tendik;

use Illuminate\Support\Facades\DB;

class TendikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*$is_pegawai = DB::connection("pgsql_2")->table("pegawai.pegawai")->select("kd_pegawai")->where([["nip", "=", session("userID")], ["id_jns_pegawai", "!=", 5]])->get();

      if(count($is_pegawai)==0){
        session()->flash("msg", "Terjadi Kesalahan Mengambil data tendik");
        return redirect("/servicelogout");
      }
            return redirect("/tendik/angket"); */

      // SAML Login
      if(session("tipe") != 3){
        session()->flash("msg", "Terjadi Kesalahan Mengambil data tendik");
        return redirect("/logout");
      }
      return redirect("/tendik/angket"); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function angket()
    {
      if(null == session("userID")){
            session()->flash("msg", "Terjadi Kesalahan Mengambil data tendik");
            return redirect("/");
        }
      return view('tendik/angket');

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
      
     /* $biodata = new Biodata_tendik;
      $biodata->inisial = $request->inisial;
      $biodata->email = $request->email;
      $biodata->unit_kerja = $request->unitkerja;
      $biodata->tmt = $request->tmt;
      $biodata->jenis_kelamin = $request->jeniskelamin;
      $biodata->usia = $request->usia;
      $biodata->pendidikan_tertinggi = $request->pendidikan;
      $biodata->lama_bekerja = $request->lamakerja;

      if($biodata->save()){
        // dd($biodata->id);
       session(["biodata_id" => $biodata->id]);
               // dd(session("biodata_id"));
       return redirect("/tendik/angket");
     }
     else {
      return redirect()->back()->withInput();
    }*/
    
  }


  public function simpanAngket(Request $request){
    if(null == session("userID")){
      session()->flash("msg", "Isikan biodata anda.");
      return redirect("/tendik");
    }
    $data = $this->dataKuesioner($request->except("_token"));

    Angket_tendik::insert($data);

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
          $data[$i]["tendik_nip"] = $user_id;
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
     $data_db = DB::table("angket_tendik")->select("kuesioner", "value", DB::raw("COUNT(id) as count"))->whereIn("kuesioner", ["q1", "q4"])->groupBy("kuesioner", "value")->get();

    $list_pemahaman_vmts = array(
        "unit" => array("ya"=>0, "tidak"=>0, "total_responden"=>0),
        "universitas" => array("ya"=>0, "tidak"=>0, "total_responden"=>0),
    );
    foreach ($data_db as $key => $row) {
        if($row->kuesioner == 'q1') {
            if($row->value == 'Ya') {
                $list_pemahaman_vmts['unit']['ya'] = $row->count;
            }
            elseif($row->value == 'Tidak') {
                $list_pemahaman_vmts['unit']['tidak'] = $row->count;
            }
            $list_pemahaman_vmts["unit"]["total_responden"] = $list_pemahaman_vmts["unit"]["ya"] + $list_pemahaman_vmts["unit"]["tidak"];
        }
        if($row->kuesioner == 'q4') {
            if($row->value == 'Ya') {
                $list_pemahaman_vmts['universitas']['ya'] = $row->count;
            }
            elseif($row->value == 'Tidak') {
                $list_pemahaman_vmts['universitas']['tidak'] = $row->count;
            }
            $list_pemahaman_vmts["universitas"]["total_responden"] = $list_pemahaman_vmts["universitas"]["ya"] + $list_pemahaman_vmts["universitas"]["tidak"];
        }
    }

    
    //Pertanyaan 2: Rumusan VMTS Universitas
    $data_db = DB::table("angket_tendik")
                ->select("value", DB::raw("COUNT(id) AS jumlah_responden"))
                ->where('kuesioner', 'q2')
                ->groupBy('value')
                ->get();
    $media_vmts_unit = array(
              'kuesioner' => array(
                'Rapat' => 0,
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
          foreach ($media_vmts_unit['kuesioner'] as $pertanyaan => $jumlah) {
            if(strtolower($jawaban) == strtolower($pertanyaan)) {
              $media_vmts_unit['kuesioner'][$pertanyaan] += $row->jumlah_responden;
              $lain_exist = false;
            }
          }
          //tambahkan counter pilihan "Lain-lain" jika ada value custom
          $media_vmts_unit['kuesioner']['Lain-lain'] += ($lain_exist ? $row->jumlah_responden : 0);
          $media_vmts_unit['total_pilihan']++;
        }
      }

      $media_vmts_unit['total_responden'] += $row->jumlah_responden;
    }

    //Pertanyaan 3: Kinerja Unit
    $data_db = DB::table("angket_tendik")
                ->select("value", DB::raw("COUNT(id) AS jumlah_responden"))
                ->where('kuesioner', 'q3')
                ->groupBy('value')
                ->get();
    $kinerja_unit = array(
              'kuesioner' => array(
                   'Kinerja sudah selaras dengan visi, misi, tujuan dan sasaran UM' => 0, 
                  'Kinerja cukup selaras dengan visi, misi, tujuan dan sasaran UM' => 0, 
                  'Kinerja kurang selaras dengan visi, misi, tujuan dan sasaran UM' => 0, 
                  'Tidak tahu karena tidak mengetahui rumusan visi, misi, tujuan dan sasaran UM' => 0, 
                  'Tidak tahu karena tidak pernah memperhatikan' => 0,
              ),
              'total_responden' => 0
            );
    foreach ($data_db as $row) {
      foreach ($kinerja_unit['kuesioner'] as $pertanyaan => $jumlah) {
        if(strtolower($row->value) == strtolower($pertanyaan)) {
          $kinerja_unit['kuesioner'][$pertanyaan] += $row->jumlah_responden;
        }
      }
      $kinerja_unit['total_responden'] += $row->jumlah_responden;
    }

   

    $data_db = DB::table("angket_tendik")
                ->select("value", DB::raw("COUNT(id) AS jumlah_responden"))
                ->where('kuesioner', 'q5')
                ->groupBy('value')
                ->get();
    $media_vmts_universitas = array(
              'kuesioner' => array(
                'Rapat' => 0,
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
          foreach ($media_vmts_universitas['kuesioner'] as $pertanyaan => $jumlah) {
            if(strtolower($jawaban) == strtolower($pertanyaan)) {
              $media_vmts_universitas['kuesioner'][$pertanyaan] += $row->jumlah_responden;
              $lain_exist = false;
            }
          }
          //tambahkan counter pilihan "Lain-lain" jika ada value custom
          $media_vmts_universitas['kuesioner']['Lain-lain'] += ($lain_exist ? $row->jumlah_responden : 0);
          $media_vmts_universitas['total_pilihan']++;
        }
      }

      $media_vmts_universitas['total_responden'] += $row->jumlah_responden;
    }

    //Pertanyaan 3: Kinerja Universitas
    $data_db = DB::table("angket_tendik")
                ->select("value", DB::raw("COUNT(id) AS jumlah_responden"))
                ->where('kuesioner', 'q6')
                ->groupBy('value')
                ->get();
    $kinerja_universitas = array(
              'kuesioner' => array(
                  'Kinerja sudah selaras dengan visi, misi, tujuan dan sasaran UM' => 0, 
                  'Kinerja cukup selaras dengan visi, misi, tujuan dan sasaran UM' => 0, 
                  'Kinerja kurang selaras dengan visi, misi, tujuan dan sasaran UM' => 0, 
                  'Tidak tahu karena tidak mengetahui rumusan visi, misi, tujuan dan sasaran UM' => 0, 
                  'Tidak tahu karena tidak pernah memperhatikan' => 0,
              ),
              'total_responden' => 0
            );
    foreach ($data_db as $row) {
      foreach ($kinerja_universitas['kuesioner'] as $pertanyaan => $jumlah) {
        if(strtolower($row->value) == strtolower($pertanyaan)) {
          $kinerja_universitas['kuesioner'][$pertanyaan] += $row->jumlah_responden;
        }
      }
      $kinerja_universitas['total_responden'] += $row->jumlah_responden;
    }

    $list_q7a = $this->kepuasan('angket_tendik', ['q7a','q7b']);
    //$list_q7b = $this->kepuasan('angket_tendik', 'q7b');
    $list_q7c = $this->kepuasan('angket_tendik', ['q7c','q7d','q7e','q7f']);
    //$list_q7d = $this->kepuasan('angket_tendik', 'q7d');
    //$list_q7e = $this->kepuasan('angket_tendik', 'q7e');
    //$list_q7f = $this->kepuasan('angket_tendik', 'q7f');
    $list_q7g = $this->kepuasan('angket_tendik', ['q7g','q7h','q7i','q7j','q7k','q7l','q7m']);
    //$list_q7h = $this->kepuasan('angket_tendik', 'q7h');
    //$list_q7i = $this->kepuasan('angket_tendik', 'q7i');
    //$list_q7j = $this->kepuasan('angket_tendik', 'q7j');
    //$list_q7k = $this->kepuasan('angket_tendik', 'q7k');
    //$list_q7l = $this->kepuasan('angket_tendik', 'q7l');
    //$list_q7m = $this->kepuasan('angket_tendik', 'q7m');
    $list_q7n = $this->kepuasan('angket_tendik', ['q7n','q7o','q7p','q7q','q7r','q7s','q7t','q7u','q7v']);
   // $list_q7o = $this->kepuasan('angket_tendik', 'q7o');
    //$list_q7p = $this->kepuasan('angket_tendik', 'q7p');
    //$list_q7q = $this->kepuasan('angket_tendik', 'q7q');
    //$list_q7r = $this->kepuasan('angket_tendik', 'q7r');
    //$list_q7s = $this->kepuasan('angket_tendik', 'q7s');
    //$list_q7t = $this->kepuasan('angket_tendik', 'q7t');
    //$list_q7u = $this->kepuasan('angket_tendik', 'q7u');
    //$list_q7v = $this->kepuasan('angket_tendik', 'q7v');
    

    return view("tendik.report", compact('list_pemahaman_vmts', 'media_vmts_unit','media_vmts_universitas','kinerja_unit','kinerja_universitas','list_q1', 'list_q2', 'list_q3', 'list_q4', 'list_q5', 'list_q6', 'list_q7a', 'list_q7b', 'list_q7c', 'list_q7d', 'list_q7e', 'list_q7f', 'list_q7g', 'list_q7h', 'list_q7i', 'list_q7j', 'list_q7k', 'list_q7l', 'list_q7m', 'list_q7n', 'list_q7o', 'list_q7p', 'list_q7q', 'list_q7r', 'list_q7s', 'list_q7t', 'list_q7u', 'list_q7v'));
  }

}
