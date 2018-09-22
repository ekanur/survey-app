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

        // var_dump($data); die();

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
      $m_angket = new Angket_alumni;

    //Pertanyaan 1: Pemahaman VTMS prodis
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

    // dd($list_q1);

    
   //Pertanyaan 2: Rumusan VMTS prodi
    $data_db = DB::table("angket_alumni")
                ->select("value", DB::raw("COUNT(id) AS jumlah_responden"))
                ->where('kuesioner', 'q2')
                ->groupBy('value')
                ->get();
    $list_q2 = array(
              'kuesioner' => array(
                  'Masa orientasi Maba' => 0, 
                  'Katalog dan atau dokumen Jurusan lainnya' => 0, 
                  'Membaca banner' => 0, 
                  'Kegiatan kemahasiswaan' => 0, 
                  'Laman UM' => 0,
                  'Lain-lain'=>0,
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

   

  //Pertanyaan 3: Kinerja Prodi
    $list_q3 = $this->kinerja("angket_alumni", "q3");

    //dd($list_q3); 
  //pertanyaan 4: relevansi prodi dan pekerjaan
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
// dd($list_q4);

    //pertanyaan 5 status karir
   $data_db = DB::table("angket_alumni")
                ->select("value", DB::raw("COUNT(id) AS jumlah_responden"))
                ->where('kuesioner', 'q5')
                ->groupBy('value')
                ->get();
    $list_q5 = array(
              'kuesioner' => array(
                  'Bekerja di sekolah negeri atau swasta' => 0, 
                  'Bekerja di institusi non-pendidikan' => 0, 
                  'Bekerja di sektor swasta, bisnis atau BUMN' => 0, 
                  'Berwirausaha' => 0, 
                  'Studi Lanjut (S2/S3)' => 0,
                  'Lain-lain' =>0,
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


   //pertanyaan 5 status pekerjaan
   $data_db = DB::table("angket_alumni")
                ->select("value", DB::raw("COUNT(id) AS jumlah_responden"))
                ->where('kuesioner', 'q6')
                ->groupBy('value')
                ->get();
    $list_q6 = array(
              'kuesioner' => array(
                  'PNS' => 0, 
                  'Non PNS' => 0, 
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
          foreach ($list_q6['kuesioner'] as $pertanyaan => $jumlah) {
            if(strtolower($jawaban) == strtolower($pertanyaan)) {
              $list_q6['kuesioner'][$pertanyaan] += $row->jumlah_responden;
              $lain_exist = false;
            }
          }
          //tambahkan counter pilihan "Lain-lain" jika ada value custom
          $list_q6['kuesioner']['Lain-lain'] += ($lain_exist ? $row->jumlah_responden : 0);
          $list_q6['total_pilihan']++;
        }
      }

      $list_q6['total_responden'] += $row->jumlah_responden;
    }




  
    return view("alumni.report", compact('list_q1','list_q2','list_q3','list_q4','list_q5','list_q6'));
  }
}
