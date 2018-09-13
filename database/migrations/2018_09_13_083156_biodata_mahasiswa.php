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
            $table->string("email", 75);
            $table->enum("jenis_kelamin", ["laki_laki", "perempuan"]);
            $table->string("jalur_masuk", 10);
            $table->string("tahun_masuk", 4);
            $table->enum("jenjang_pendidikan", ["diploma","S1","S2","S3"]);
            $table->enum("pendornon", ["pendidikan", "non-kependidikan"]);
            $table->string("prodi", 100);
            $table->enum("jenis_pendidikan", ["akademik", "profesi","vokasi"]);            
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
