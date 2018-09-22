<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function pemahamanVMTS($tabel, $kuesioner) {
    $data = DB::table($table)->select("kuesioner", "value", DB::raw("COUNT(id) as count"))->where("kuesioner", $kuesioner)->groupBy("kuesioner", "value")->get();
  }

  public function mediaVMTS($tabel, $kuesioner) {
    $data = array("data"=>array(), "responden"=>0);
    $media_vmts = DB::table($tabel)
    ->select("value")
    ->where('kuesioner', $kuesioner)
    ->get();

    $data["responden"] = count($media_vmts);

    foreach ($media_vmts as $media) {
      $media->value = json_decode($media->value);
      for ($i=0; $i < sizeof($media->value) ; $i++) { 
        if(!array_key_exists($media->value[$i], $data["data"])){
          $data["data"][$media->value[$i]] = 1;
        }else{
          $data["data"][$media->value[$i]] = $data["data"][$media->value[$i]]+1;
        }

      }
    } 
    return $data;
  }

  public function kinerja($tabel, $kuesioner) {
    $data = array("data"=>array(), "responden"=>0);
    $kinerja = DB::table($tabel)
    ->select("value", DB::raw("COUNT(id) as count"))
    ->where("kuesioner", $kuesioner)
    ->groupBy("value")
    ->get();

    foreach ($kinerja as $data_kinerja) {
      $data["data"][$data_kinerja->value] = $data_kinerja->count;
      $data["responden"] = $data["responden"]+$data_kinerja->count;
    }

    return $data;
  }

  public function kepuasan($tabel, $kuesioner) {
    $list_kepuasan = array(
      'kuesioner' => array(
        'skor_4' => ["alias" => 'Sangat Puas',"responden" => 0, "skor" => 0],
        'skor_3' => ["alias" => 'Puas',"responden" => 0, "skor" => 0], 
        'skor_2' => ["alias" => 'Cukup Puas',"responden" => 0, "skor" => 0], 
        'skor_1' => ["alias" => 'Tidak Puas', "responden" => 0, "skor" => 0] 
      ),
      'total_skor' => 0,
      'total_responden' => 0
    );
    $data_db = DB::table($tabel)
        ->select("value", 
          DB::raw("COUNT(id) AS jumlah_responden"), 
          DB::raw("SUM(value::INT) AS jumlah_skor"))
        ->where('kuesioner', $kuesioner)
        ->groupBy('value')
        ->get();
    foreach ($data_db as $row) {
      foreach ($list_kepuasan['kuesioner'] as $pertanyaan => $jumlah) {
        if(strtolower("skor_".$row->value) == strtolower($pertanyaan)) {
          $list_kepuasan['kuesioner'][$pertanyaan]['responden'] += $row->jumlah_responden;
          $list_kepuasan['kuesioner'][$pertanyaan]['skor'] += $row->jumlah_skor;
        }
      }
      $list_kepuasan['total_skor'] += $row->value;
      $list_kepuasan['total_responden'] += $row->jumlah_responden;
    }

    return $list_kepuasan;
  }
}
