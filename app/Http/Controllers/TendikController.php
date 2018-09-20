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
      $is_pegawai = DB::connection("pgsql_2")->table("pegawai.pegawai")->select("kd_pegawai")->where([["nip", "=", session("userID")], ["id_jns_pegawai", "!=", 5]])->get();

      if(count($is_pegawai)==0){
        session()->flash("msg", "Terjadi Kesalahan Mengambil data tendik");
        return redirect("/servicelogout");
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
    }
