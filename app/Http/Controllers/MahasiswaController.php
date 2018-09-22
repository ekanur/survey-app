<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Biodata_mahasiswa;

use Illuminate\Support\Facades\DB;
use App\Angket_mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $is_mahasiswa = DB::connection("pgsql_2")->table("pegawai.pegawai")->select("kd_pegawai")->where("nip", "=", session("userID"))->get();

      if(count($is_mahasiswa)!=0){
        session()->flash("msg", "Terjadi Kesalahan Mengambil data mahasiswa");
        return redirect("/servicelogout");
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
    }
   
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
    }
