<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AngketMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angket_mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string("mahasiswa_nim", 25);
            $table->integer("tahun");
            $table->string("kuesioner", 20);
            $table->text("value")->nullable();
            $table->timestamps();
            $table->softDeletes();
            //

            $table->index(['mahasiswa_nim', 'kuesioner']);
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
