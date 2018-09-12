<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BiodataDosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_dosen', function (Blueprint $table) {
            $table->increments('id');
            $table->string("email", 75);
            $table->string("prodi", 100);
            $table->string("jurusan", 100);
            $table->string("fakultas", 100);
            $table->date("tmt");
            $table->enum("jenis_kelamin", ["laki_laki", "perempuan"]);
            $table->enum("usia", ["<30", "31-40", "41-50", "51-60", ">60"]);
            $table->string("pendidikan_tertinggi", 30);
            $table->string("lama_mengajar", 25);
            $table->enum("jabatan_fungsional", ["TP", "AA", "L", "LK", "GB"]);
            $table->string("tugas_tambahan", 50);
            $table->timestamps();
            $table->softDeletes();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
