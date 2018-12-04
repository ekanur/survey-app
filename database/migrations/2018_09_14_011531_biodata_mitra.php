<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BiodataMitra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('biodata_mitra', function (Blueprint $table) {
            $table->increments('id');
            $table->string("jabatan_pengisi", 75);
            $table->string("nama_instansi", 75);
            $table->string("no_telp", 20);
            $table->unsignedSmallInteger("tahun_berdiri");
            $table->unsignedSmallInteger("tahun_kerjasama");
            $table->string("skala_operasional", 50);
            $table->timestamps();
            $table->softDeletes();
            //

            $table->index(['id']);
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
        Schema::drop('biodata_mitra');
    }
}
