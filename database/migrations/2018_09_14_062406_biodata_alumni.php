<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BiodataAlumni extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_alumni', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nama", 75);
            $table->string("email", 75);
            $table->string("prodi", 100);
            $table->string("fakultas", 100);
            $table->unsignedSmallInteger("tahun_masuk");
            $table->unsignedSmallInteger("tahun_lulus");
            $table->unsignedSmallInteger("tahun_bekerja");
            $table->unsignedSmallInteger("masa_tunggu");
            $table->timestamps();
            $table->softDeletes();
            //
        });
        //
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
