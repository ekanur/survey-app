<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Session;
use Illuminate\Support\Facades\DB;
use App\Biodata_alumni;
use App\Angket_alumni;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("alumni/identitas");
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
            return redirect("/alumni");
        }
        return view('alumni/angket');

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

  $biodata = new Biodata_alumni;
    $biodata->nama = $request->nama;
    $biodata->email = $request->email;
    $biodata->prodi = $request->prodijurusan;
     $biodata->fakultas = $request->fakultas;
     $biodata->tahun_masuk = $request->tahun_masuk;
     $biodata->tahun_lulus = $request->tahun_lulus;
     $biodata->tahun_bekerja = $request->tahun_bekerja;
     $biodata->masa_tunggu = $request->masa_tunggu;
     

   if($biodata->save()){
       session(["biodata_id" => $biodata->id]);
      // dd(session("biodata_alumni_id"));
       return redirect("/alumni/angket");
 }else{
      return redirect()->back()->withInput();
  }
}


    public function simpanAngket(Request $request){
        if(null == session("biodata_id")){
            session()->flash("msg", "Isikan biodata anda.");
            return redirect("/alumni");
        }
        $data = $this->dataKuesioner($request->except("_token"));

        Angket_alumni::insert($data);

        session()->forget("biodata_id");
      session()->flash("msg", "Terimakasih telah berpartisipasi didalam kemajuan Universitas Negeri Malang.");
        return redirect("/");
    }

    function dataKuesioner($request){
        
        $biodata_id = session::get('biodata_id'); //diubah ke session hasil dari simpanBiodata
        $tahun = (null != session('tahun')) ? session('tahun') : date("Y") ;
        $data = array();
        $i=0;
        foreach ($request as $key => $value) {
            $data[$i]["biodata_alumni_id"] = $biodata_id;
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
    $m_alumni = new Angket_alumni;

    //Pertanyaan 1 : Pemahaman VTMS Universitas
    $data_db = $m_alumni->where('kuesioner', 'q1')->get();
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

    //Pertanyaan 3 :  Kinerja Universitas
    $data_db = DB::table("angket_alumni")
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
    
    // print_r($data_db); print_r($list_q3); die();
    return view("alumni.report", compact('list_q1', 'list_q3'));
  }

}
