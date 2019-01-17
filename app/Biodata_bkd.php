<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata_bkd extends Model
{
    protected $table = "biodata_dosen_sibkd";
    protected $fillable = ["nip", "nama", "jenis_kelamin", "jurusan", "fakultas"];
}
