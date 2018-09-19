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
    // $m_angket = new Angket_alumni;

    //Pertanyaan 1: Pemahaman VTMS Universitas
   $data_prodi = DB::table("angket_dosen")->select("kuesioner", "value", DB::raw("COUNT(id) as count"))->where("kuesioner", "ILIKE", "%q1%")->groupBy("kuesioner", "value");

    $data_fakultas = DB::table("angket_dosen")->select("kuesioner", "value", DB::raw("COUNT(id) as count"))->where("kuesioner", "ILIKE","%q4%")->groupBy("kuesioner", "value")->union($data_prodi)->get();


    $list_pemahaman_vmts = array(
        "fakultas" => array("Ya"=>0, "Tidak"=>0, "Responden"=>0),
        "prodi" => array("Ya"=>0, "Tidak"=>0, "Responden"=>0),
    );
    foreach ($data_fakultas as $pemahaman_vmts) {
      if($pemahaman_vmts->kuesioner == 'q1'){
        if($pemahaman_vmts->value == 'Ya'){
            $list_pemahaman_vmts["prodi"]["Ya"] = $pemahaman_vmts->count;
        }elseif($pemahaman_vmts->value == 'Tidak'){
            $list_pemahaman_vmts["prodi"]["Tidak"] = $pemahaman_vmts->count;
        }
            $list_pemahaman_vmts["prodi"]["Responden"] = $list_pemahaman_vmts["prodi"]["Ya"]+$list_pemahaman_vmts["prodi"]["Tidak"];
      }elseif($pemahaman_vmts->kuesioner == 'q4'){
        if($pemahaman_vmts->value == 'Ya'){
            $list_pemahaman_vmts["fakultas"]["Ya"] = $pemahaman_vmts->count;
        }elseif($pemahaman_vmts->value == 'Tidak'){
            $list_pemahaman_vmts["fakultas"]["Tidak"] = $pemahaman_vmts->count;
        }
            $list_pemahaman_vmts["fakultas"]["Responden"] = $list_pemahaman_vmts["fakultas"]["Ya"]+$list_pemahaman_vmts["fakultas"]["Tidak"];
      }
    }
    // dd($list_pemahaman_vmts);

    
    $media_vmts_prodi = $this->mediaVMTS("angket_alumni", "q2");

    // dd($media_vmts_prodi);

    //Pertanyaan 3: Media Penyampaian VMTS fakultas
    $media_vmts_fakultas = $this->mediaVMTS("angket_alumni", "q5");


    //Pertanyaan 4: Kinerja Prodi
    $kinerja_prodi = $this->kinerja("angket_alumni", "q3");

    // dd($kinerja_prodi);


    //Pertanyaan 5: Kinerja Fakultas

    $kinerja_fakultas = $this->kinerja("angket_alumni", "q6");

    // dd($kinerja_fakultas);

    return view("alumni.report", compact('list_pemahaman_vmts', 'media_vmts_prodi', 'media_vmts_fakultas', 'kinerja_prodi', 'kinerja_fakultas'));
  }
}
