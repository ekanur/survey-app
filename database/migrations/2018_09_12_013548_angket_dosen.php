<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AngketDosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angket_dosen', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("biodata_dosen_id");
            $table->integer("tahun");
            $table->string("kuesioner", 20);
<<<<<<< HEAD
            $table->string("value", 200);
=======
            $table->string("value", 200)->nullable();
>>>>>>> f06684f5b3bda8d3990d693d6a07dda75c436ad8
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
