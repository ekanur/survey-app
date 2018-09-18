<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BiodataTendik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_tendik', function (Blueprint $table) {
            $table->increments('id');
            $table->string("inisial", 100)
            $table->string("email", 75);
            $table->string("unit_kerja", 100)->nullable();
            $table->date("tmt");
            $table->enum("jenis_kelamin", ["laki_laki", "perempuan"]);
            $table->enum("usia", ["<30", "31-40", "41-50", "51-60", ">60"]);
            $table->string("pendidikan_tertinggi", 30);
            $table->string("lama_bekerja", 25);
            $table->timestamps();
            $table->softDeletes();
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
