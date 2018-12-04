<?php
use App\Pertanyaan_angket;

/* Helper function for getting list pertanyaan angket*/
if (!function_exists('getListPertanyaan')) {
  
  //GET LIST PERTANYAAN
  function getListPertanyaan($id='', $sasaran='', $pertanyaan_only=FALSE){

    $data_db = Pertanyaan_angket::select("id", "kd_pertanyaan", "pertanyaan", "sasaran");
 
    if($sasaran) {
      $data_db->where("sasaran", "like", '%'.$sasaran.'%');
    }
    if($id) {
      $data_db->where("id", "=", $id);
    }
 
    $data_db->orderBy('sasaran', 'asc');
    $data_db->orderBy('kd_pertanyaan', 'asc');
    $data_db = $data_db->get();

    if($pertanyaan_only) {
      $data_db = prepDataPertanyaan($data_db);
    }

    return $data_db;
  }

  // Untuk penataan hasil fetch dari db menjadi array yang akan digunakan untuk memanggil pertanyaan di view angket
  function prepDataPertanyaan($data) {
    $result = [];
    if($data) {
      foreach ($data as $key => $row) {
        $result[$row->kd_pertanyaan] = $row->pertanyaan;
      }
    }
    return $result;
  }
}

