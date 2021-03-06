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
            $table->string("dosen_nip", 25);
            $table->integer("tahun");
            $table->string("kuesioner", 20);
            $table->text("value")->nullable();
            $table->timestamps();
            $table->softDeletes();
            //

            $table->index(['dosen_nip', 'kuesioner']);
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
