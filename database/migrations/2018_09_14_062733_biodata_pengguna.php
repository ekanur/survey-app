<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BiodataPengguna extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_pengguna', function (Blueprint $table) {
            $table->increments('id');
            $table->string("jabatan_pengisi", 75);
            $table->string("nama_instansi", 75);
            $table->unsignedSmallInteger("tahun_berdiri");
            $table->string("skala_operasional", 50);
            $table->string("jumlah_pegawai", 20);
            $table->string('jumlah_um', 20);
            $table->string("email", 75);
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
    }
}
