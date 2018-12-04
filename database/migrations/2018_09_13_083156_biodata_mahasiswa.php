<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BiodataMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nim", 75);
            $table->string("nama", 75);
            $table->string("email", 75);
            $table->string("fakultas", 100);
            $table->string("jurusan", 100);
            $table->string("prodi", 100);
            $table->string("kelas", 5);
            $table->unsignedSmallInteger("tahun");
            $table->timestamps();
            $table->softDeletes();
            //

            $table->index(['nim', 'nama', 'fakultas', 'jurusan', 'prodi']);
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
