<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata_mitra;
use App\Angket_mitra;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view("mitra/identitas");
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
        return redirect("/mitra");
      }
      return view('mitra/angket');

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
      $biodata = new Biodata_mitra;
      $biodata->jabatan_pengisi = $request->jabatan_pengisi;
      $biodata->nama_instansi = $request->nama_instansi;
      $biodata->no_telp = $request->no_telp;
      $biodata->tahun_berdiri = $request->tahun_berdiri;
      $biodata->skala_operasional = $request->skala_operasional;
      $biodata->tahun_kerjasama = $request->tahun_kerjasama;

      if($biodata->save()){
       session(["biodata_id" => $biodata->id]);
       return redirect("/mitra/angket");
     }
     else {
      return redirect()->back()->withInput();
    }
    
  }


  public function simpanAngket(Request $request){
    if(null == session("biodata_id")){
      session()->flash("msg", "Isikan biodata anda.");
      return redirect("/mitra");
    }
    $data = $this->dataKuesioner($request->except("_token"));

    Angket_mitra::insert($data);

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
          $data[$i]["biodata_mitra_id"] = $biodata_id;
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
