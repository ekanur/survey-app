<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Biodata_pengguna;
use App\Angket_pengguna;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view("pengguna/identitas");
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
        return redirect("/pengguna");
      }
      return view('pengguna/angket');

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
      return redirect("/pengguna/angket");

      $biodata = new Biodata_pengguna;
      $biodata->jabatan_pengisi = $request->jabatan_pengisi;
      $biodata->nama_instansi = $request->nama_instansi;
      $biodata->tahun_berdiri = $request->tahun_berdiri;
      $biodata->skala_operasional = $request->skala_operasional;
      $biodata->jumlah_pegawai = $request->jumlah_pegawai;
      $biodata->jumlah_um = $request->jumlah_um;
      $biodata->email =$request->email;

      if($biodata->save()){
        // dd($biodata->id);
       session(["biodata_id" => $biodata->id]);
               // dd(session("biodata_id"));
       return redirect("/pengguna/angket");
     }
     else {
      return redirect()->back()->withInput();
    }
    
  }


  public function simpanAngket(Request $request){
    if(null == session("biodata_id")){
      session()->flash("msg", "Isikan biodata anda.");
      return redirect("/pengguna");
    }
    $data = $this->dataKuesioner($request->except("_token"));

    Angket_pengguna::insert($data);

    session()->forget("dosen_id");
    session()->flash("msg", "Terima kasih telah berpartisipasi mengisi angket.");
    return redirect("/");
  }

  function dataKuesioner($request){
        $biodata_id = session("biodata_id"); //diubah ke session hasil dari simpanBiodata
        $tahun = (null != session('tahun')) ? session('tahun') : date("Y") ;
        $data = array();
        $i=0;
        foreach ($request as $key => $value) {
          $data[$i]["biodata_pengguna_id"] = $biodata_id;
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
