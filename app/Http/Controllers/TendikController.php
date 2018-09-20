<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Biodata_tendik;
use App\Angket_tendik;

class TendikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view("tendik/identitas");
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
        return redirect("/tendik");
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
      
      $biodata = new Biodata_tendik;
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
    }
    
  }


  public function simpanAngket(Request $request){
    if(null == session("biodata_id")){
      session()->flash("msg", "Isikan biodata anda.");
      return redirect("/tendik");
    }
    $data = $this->dataKuesioner($request->except("_token"));

    Angket_tendik::insert($data);

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
          $data[$i]["biodata_tendik_id"] = $biodata_id;
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
     $data_unit = DB::table("angket_tendik")->select("kuesioner", "value", DB::raw("COUNT(id) as count"))->where("kuesioner", "ILIKE", "%q1%")->groupBy("kuesioner", "value");

    $data_universitas = DB::table("angket_tendik")->select("kuesioner", "value", DB::raw("COUNT(id) as count"))->where("kuesioner", "ILIKE","%q4%")->groupBy("kuesioner", "value")->union($data_unit)->get();


    $list_pemahaman_vmts = array(
        "universitas" => array("Ya"=>0, "Tidak"=>0, "Responden"=>0),
        "unit" => array("Ya"=>0, "Tidak"=>0, "Responden"=>0),
    );
    foreach ($data_universitas as $pemahaman_vmts) {
      if($pemahaman_vmts->kuesioner == 'q1'){
        if($pemahaman_vmts->value == 'Ya'){
            $list_pemahaman_vmts["unit"]["Ya"] = $pemahaman_vmts->count;
        }elseif($pemahaman_vmts->value == 'Tidak'){
            $list_pemahaman_vmts["unit"]["Tidak"] = $pemahaman_vmts->count;
        }
            $list_pemahaman_vmts["unit"]["Responden"] = $list_pemahaman_vmts["unit"]["Ya"]+$list_pemahaman_vmts["unit"]["Tidak"];
      }elseif($pemahaman_vmts->kuesioner == 'q4'){
        if($pemahaman_vmts->value == 'Ya'){
            $list_pemahaman_vmts["universitas"]["Ya"] = $pemahaman_vmts->count;
        }elseif($pemahaman_vmts->value == 'Tidak'){
            $list_pemahaman_vmts["universitas"]["Tidak"] = $pemahaman_vmts->count;
        }
            $list_pemahaman_vmts["universitas"]["Responden"] = $list_pemahaman_vmts["universitas"]["Ya"]+$list_pemahaman_vmts["universitas"]["Tidak"];
      }
    }

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

    $data_db = $m_angket->where('kuesioner', 'q4')->get();
    $list_q4 = array(
              'jumlah_ya' => 0, 
              'jumlah_tidak' => 0, 
              'total_responden' => count($data_db)
            );
    foreach ($data_db as $row) {
      if(strtolower($row->value) == 'ya') {
        $list_q4['jumlah_ya']++;
      }
      else if(strtolower($row->value) == 'tidak') {
        $list_q4['jumlah_tidak']++;
      }
    }
    //Pertanyaan 2: Rumusan VMTS Universitas
    $data_db = DB::table("angket_tendik")
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
    $data_db = DB::table("angket_tendik")
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

   

    $data_db = DB::table("angket_tendik")
                ->select("value", DB::raw("COUNT(id) AS jumlah_responden"))
                ->where('kuesioner', 'q5')
                ->groupBy('value')
                ->get();
    $list_q5 = array(
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
          foreach ($list_q5['kuesioner'] as $pertanyaan => $jumlah) {
            if(strtolower($jawaban) == strtolower($pertanyaan)) {
              $list_q5['kuesioner'][$pertanyaan] += $row->jumlah_responden;
              $lain_exist = false;
            }
          }
          //tambahkan counter pilihan "Lain-lain" jika ada value custom
          $list_q5['kuesioner']['Lain-lain'] += ($lain_exist ? $row->jumlah_responden : 0);
          $list_q5['total_pilihan']++;
        }
      }

      $list_q5['total_responden'] += $row->jumlah_responden;
    }

    //Pertanyaan 3: Kinerja Universitas
    $data_db = DB::table("angket_tendik")
                ->select("value", DB::raw("COUNT(id) AS jumlah_responden"))
                ->where('kuesioner', 'q6')
                ->groupBy('value')
                ->get();
    $list_q6 = array(
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
      foreach ($list_q6['kuesioner'] as $pertanyaan => $jumlah) {
        if(strtolower($row->value) == strtolower($pertanyaan)) {
          $list_q6['kuesioner'][$pertanyaan] += $row->jumlah_responden;
        }
      }
      $list_q6['total_responden'] += $row->jumlah_responden;
    }

    $list_q7a = $this->kepuasan('angket_tendik', 'q7a');
    $list_q7b = $this->kepuasan('angket_tendik', 'q7b');
    $list_q7c = $this->kepuasan('angket_tendik', 'q7c');
    $list_q7d = $this->kepuasan('angket_tendik', 'q7d');
    $list_q7e = $this->kepuasan('angket_tendik', 'q7e');
    $list_q7f = $this->kepuasan('angket_tendik', 'q7f');
    $list_q7g = $this->kepuasan('angket_tendik', 'q7g');
    $list_q7h = $this->kepuasan('angket_tendik', 'q7h');
    $list_q7i = $this->kepuasan('angket_tendik', 'q7i');
    $list_q7j = $this->kepuasan('angket_tendik', 'q7j');
    $list_q7k = $this->kepuasan('angket_tendik', 'q7k');
    $list_q7l = $this->kepuasan('angket_tendik', 'q7l');
    $list_q7m = $this->kepuasan('angket_tendik', 'q7m');
    $list_q7n = $this->kepuasan('angket_tendik', 'q7n');
    $list_q7o = $this->kepuasan('angket_tendik', 'q7o');
    $list_q7p = $this->kepuasan('angket_tendik', 'q7p');
    $list_q7q = $this->kepuasan('angket_tendik', 'q7q');
    $list_q7r = $this->kepuasan('angket_tendik', 'q7r');
    $list_q7s = $this->kepuasan('angket_tendik', 'q7s');
    $list_q7t = $this->kepuasan('angket_tendik', 'q7t');
    $list_q7u = $this->kepuasan('angket_tendik', 'q7u');
    $list_q7v = $this->kepuasan('angket_tendik', 'q7v');
    

    return view("tendik.report", compact('list_q1', 'list_q2', 'list_q3', 'list_q4', 'list_q5', 'list_q6', 'list_q7a', 'list_q7b', 'list_q7c', 'list_q7d', 'list_q7e', 'list_q7f', 'list_q7g', 'list_q7h', 'list_q7i', 'list_q7j', 'list_q7k', 'list_q7l', 'list_q7m', 'list_q7n', 'list_q7o', 'list_q7p', 'list_q7q', 'list_q7r', 'list_q7s', 'list_q7t', 'list_q7u', 'list_q7v'));
  }

    }
