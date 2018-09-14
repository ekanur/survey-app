<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Session;
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
           // dd(session("biodata_id"));
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

        session()->forget("alumni_id");
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
}
