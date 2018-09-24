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
      $is_dosen = DB::connection("pgsql_2")->table("pegawai.pegawai")->select("kd_pegawai")->where([["nip", "=", session("userID")], ["id_jns_pegawai", "=", 5]])->get();

      if(count($is_dosen)==0){
        session()->flash("msg", "Terjadi Kesalahan Mengambil data dosen");
        return redirect("/servicelogout");
      }
    return redirect("/dosen/angket"); 
        // return redirect('saml2/login');
        // return Saml2::login();
        // return view("dosen/identitas");
      // var_dump(session()->all());
    }

    /*public function login() {
     return \Auth::guest() ? redirect('saml2/login') : \Redirect::intended('/');
    }
    public function logout()
    {
      //recover sessionIndex and nameId from session
      $sessionIndex = session()->get('sessionIndex');
      $nameId = session()->get('nameId');

      //get the logout route from saml2 config
      $returnTo = config('saml2_settings.logoutRoute');

      //pass parameters into the url
      return redirect()->route('saml_logout', [
        'returnTo'=>$returnTo,
        'nameId'=>$nameId,
        'sessionIndex'=>$sessionIndex
      ]);
    }*/

    /*public function loggedin()
    {
      // return view('home');
      echo "YOU'VE BEEN LOGGED IN! HELL YEA!";
      var_dump(session()->all());
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function angket()
    {
        if(null == session("userID")){
            session()->flash("msg", "Terjadi Kesalahan Mengambil data dosen");
            return redirect("/");
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
      // $biodata = new Biodata_dosen;
      // $biodata->email = $request->email;
      // $biodata->prodi = $request->prodijurusan;
      // $biodata->fakultas = $request->fakultas;
      // $biodata->tmt = $request->tmt;
      // $biodata->jenis_kelamin = $request->jeniskelamin;
      // $biodata->usia = $request->usia;
      // $biodata->pendidikan_tertinggi = $request->pendidikan;
      // $biodata->lama_mengajar = $request->lamamengajar;
      // $biodata->jabatan_fungsional = $request->jabatanfungsional;
      // $biodata->tugas_tambahan = $request->tugastambahan;


      //   if($biodata->save()){
      //   // dd($biodata->id);
      //        session(["userID" => $biodata->id]);
      //          // dd(session("userID"));
      //        return redirect("/dosen/angket");
      //   }else{
      //       return redirect()->back()->withInput();
      //   }
    }


    public function simpanAngket(Request $request){
        if(null == session("userID")){
            session()->flash("msg", "Isikan biodata anda.");
            return redirect("/dosen");
        }
        $data = $this->dataKuesioner($request->except("_token"));

        Angket_dosen::insert($data);

        session()->forget("userID");
        session()->flash("msg", "Terima kasih telah berpartisipasi mengisi angket.");
        return redirect("/");
    }

    function dataKuesioner($request){
        
        $user_id = session('userID'); 
        $tahun = (null != session('tahun')) ? session('tahun') : date("Y") ;
        $data = array();
        $i=0;
        foreach ($request as $key => $value) {
            $data[$i]["dosen_nip"] = $user_id;
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

    //Pertanyaan 2: Media Penyampaian VMTS prodi 
    $media_vmts_prodi = $this->mediaVMTS("angket_dosen", "q2");

    //Pertanyaan 3: Media Penyampaian VMTS fakultas
    $media_vmts_fakultas = $this->mediaVMTS("angket_dosen", "q5");

    //Pertanyaan 4: Kinerja Prodi
    $kinerja_prodi = array(
      'kuesioner' => array(
          'Kinerja sudah selaras dengan visi, misi, tujuan dan sasaran Program Studi/Jurusan' => 0, 
          'Kinerja cukup selaras dengan visi, misi, tujuan, dan sasaran Program Studi/Jurusan' => 0, 
          'Kinerja kurang selaras dengan visi, misi, tujuan, dan sasaran Program Studi/Jurusan' => 0, 
          'Tidak tahu karena tidak mengetahui rumusan visi, misi, tujuan, dan sasaran Program Studi/Jurusan' => 0, 
          'Tidak tahu karena tidak pernah memperhatikan' => 0,
      ),
      'total_responden' => 0
    );
    $data_db = DB::table('angket_dosen')
                ->select("value", DB::raw("COUNT(id) AS jumlah_responden"))
                ->where('kuesioner', 'q3')
                ->groupBy('value')
                ->get();
    foreach ($data_db as $row) {
      foreach ($kinerja_prodi['kuesioner'] as $pertanyaan => $jumlah) {
        if(strtolower($row->value) == strtolower($pertanyaan)) {
          $kinerja_prodi['kuesioner'][$pertanyaan] += $row->jumlah_responden;
        }
      }
      $kinerja_prodi['total_responden'] += $row->jumlah_responden;
    }

    //Pertanyaan 6: Kinerja Fakultas
    $kinerja_fakultas = array(
      'kuesioner' => array(
          'Kinerja sudah selaras dengan visi, misi, tujuan dan sasaran Fakultas' => 0, 
          'Kinerja cukup selaras dengan visi, misi, tujuan, dan sasaran Fakultas' => 0, 
          'Kinerja kurang selaras dengan visi, misi, tujuan, dan sasaran Fakultas' => 0, 
          'Tidak tahu karena tidak mengetahui rumusan visi, misi, tujuan, dan sasaran Fakultas' => 0, 
          'Tidak tahu karena tidak pernah memperhatikan' => 0,
      ),
      'total_responden' => 0
    );
    $data_db = DB::table('angket_dosen')
                ->select("value", DB::raw("COUNT(id) AS jumlah_responden"))
                ->where('kuesioner', 'q6')
                ->groupBy('value')
                ->get();
    foreach ($data_db as $row) {
      foreach ($kinerja_fakultas['kuesioner'] as $pertanyaan => $jumlah) {
        if(strtolower($row->value) == strtolower($pertanyaan)) {
          $kinerja_fakultas['kuesioner'][$pertanyaan] += $row->jumlah_responden;
        }
      }
      $kinerja_fakultas['total_responden'] += $row->jumlah_responden;
    }

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
