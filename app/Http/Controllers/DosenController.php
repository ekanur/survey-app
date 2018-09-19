<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Session;
use App\Biodata_dosen;
use App\Angket_dosen;
use Illuminate\Support\Facades\DB;
use Saml2;
use Event;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return redirect('saml2/login');
        return Saml2::login();
        
        // return view("dosen/identitas");
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
            return redirect("/dosen");
        }
        return view('dosen/angket');

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
      $biodata = new Biodata_dosen;
      $biodata->email = $request->email;
      $biodata->prodi = $request->prodijurusan;
      $biodata->fakultas = $request->fakultas;
      $biodata->tmt = $request->tmt;
      $biodata->jenis_kelamin = $request->jeniskelamin;
      $biodata->usia = $request->usia;
      $biodata->pendidikan_tertinggi = $request->pendidikan;
      $biodata->lama_mengajar = $request->lamamengajar;
      $biodata->jabatan_fungsional = $request->jabatanfungsional;
      $biodata->tugas_tambahan = $request->tugastambahan;


        if($biodata->save()){
        // dd($biodata->id);
             session(["biodata_id" => $biodata->id]);
               // dd(session("biodata_id"));
             return redirect("/dosen/angket");
        }else{
            return redirect()->back()->withInput();
        }
    }


    public function simpanAngket(Request $request){
        if(null == session("biodata_id")){
            session()->flash("msg", "Isikan biodata anda.");
            return redirect("/dosen");
        }
        $data = $this->dataKuesioner($request->except("_token"));

        Angket_dosen::insert($data);

        session()->forget("biodata_id");
        session()->flash("msg", "Terima kasih telah berpartisipasi mengisi angket.");
        return redirect("/");
    }

    function dataKuesioner($request){
        
        $biodata_id = session('biodata_id'); //diubah ke session hasil dari simpanBiodata
        $tahun = (null != session('tahun')) ? session('tahun') : date("Y") ;
        $data = array();
        $i=0;
        foreach ($request as $key => $value) {
            $data[$i]["biodata_dosen_id"] = $biodata_id;
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
    // $m_angket = new Angket_dosen;

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

    //Pertanyaan 2: Media Penyampaian VMTS prodi

    $media_vmts_prodi = $this->mediaVMTS("angket_dosen", "q2");

    // dd($media_vmts_prodi);

    //Pertanyaan 3: Media Penyampaian VMTS fakultas
    $media_vmts_fakultas = $this->mediaVMTS("angket_dosen", "q5");


    //Pertanyaan 4: Kinerja Prodi
    $kinerja_prodi = $this->kinerja("angket_dosen", "q3");

    // dd($kinerja_prodi);


    // foreach ($data_db as $row) {
    //   foreach ($list_q3['kuesioner'] as $pertanyaan => $jumlah) {
    //     if(strtolower($row->value) == strtolower($pertanyaan)) {
    //       $list_q3['kuesioner'][$pertanyaan] += $row->jumlah_responden;
    //     }
    //   }
    //   $list_q3['total_responden'] += $row->jumlah_responden;
    // }

    //Pertanyaan 5: Kinerja Fakultas

    $kinerja_fakultas = $this->kinerja("angket_dosen", "q6");

    // dd($kinerja_fakultas);

    // //Pertanyaan 4A: Profil Universitas (VMTS)
    // $data_db = DB::table("angket_dosen")
    //             ->select("value", 
    //               DB::raw("COUNT(id) AS jumlah_responden"), 
    //               DB::raw("SUM(value::INT) AS jumlah_skor"))
    //             ->where('kuesioner', 'q4a')
    //             ->groupBy('value')
    //             ->get();
    // $list_q4a = array(
    //           'kuesioner' => array(
    //               'skor_4' => ["alias" => 'Sangat Puas',"responden" => 0, "skor" => 0],
    //               'skor_3' => ["alias" => 'Puas',"responden" => 0, "skor" => 0], 
    //               'skor_2' => ["alias" => 'Cukup Puas',"responden" => 0, "skor" => 0], 
    //               'skor_1' => ["alias" => 'Tidak Puas', "responden" => 0, "skor" => 0] 
    //             ),
    //           'total_skor' => 0,
    //           'total_responden' => 0
    //         );
    // foreach ($data_db as $row) {
    //   foreach ($list_q4a['kuesioner'] as $pertanyaan => $jumlah) {
    //     if(strtolower("skor_".$row->value) == strtolower($pertanyaan)) {
    //       $list_q4a['kuesioner'][$pertanyaan]['responden'] += $row->jumlah_responden;
    //       $list_q4a['kuesioner'][$pertanyaan]['skor'] += $row->jumlah_skor;
    //     }
    //   }
    //   $list_q4a['total_skor'] += $row->value;
    //   $list_q4a['total_responden'] += $row->jumlah_responden;
    // }

    //Pertanyaan 4B, C, D, E: Jejaring, Kontribusi universitas, Kontribusi pengguna di akademik, Kontribusi pengguna di non-akademik (Kerjasama)
    
    //Pertanyaan 4F: Pembelajaran (Pendidikan)

    //Pertanyaan 4G: Keterlibatan (Penelitian)

    //Pertanyaan 4H: Keterlibatan (Pengadian kepada masyarakat)
    
    // print_r($data_db); print_r($list_q4a); die();
    return view("dosen.report", compact('list_pemahaman_vmts', 'media_vmts_prodi', 'media_vmts_fakultas', 'kinerja_prodi', 'kinerja_fakultas'));
  }
}
