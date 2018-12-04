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
            $table->string("nip", 20);
            $table->string("nama", 75);
            $table->integer("jenis_kelamin");
            $table->string("fakultas", 100);
            $table->string("jurusan", 100);
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
