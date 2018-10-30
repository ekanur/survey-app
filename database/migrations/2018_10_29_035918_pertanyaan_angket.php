<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PertanyaanAngket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan_angket', function(Blueprint $table) {
            $table->increments('id');
            $table->string('kd_pertanyaan', 30)->comment('e.g.: q1, q2a, q2b, etc.');
            $table->text('pertanyaan');
            $table->string('sasaran', 30)->comment('e.g.: dosen, mahasiswa, tendik, alumni, pengguna, mitra');
            $table->softDeletes();
            $table->timestamps();
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
