<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Session;
use App\Biodata_dosen;
use App\Angket_dosen;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dosen/identitas");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function angket()
    {
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
<<<<<<< HEAD
    
           $id_biodata=$biodata->id;
            Session::put('biodata_id', $id_biodata);
           // var_dump(Session::get('biodata_id')); die();
=======
    // dd($biodata->id);
           session(["biodata_id" => $biodata->id]);
           // dd(session("biodata_id"));
>>>>>>> f06684f5b3bda8d3990d693d6a07dda75c436ad8
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

        session()->forget("dosen_id");
        return redirect("/");
    }

    function dataKuesioner($request){
        
        $biodata_id = session::get('biodata_id'); //diubah ke session hasil dari simpanBiodata
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
}
