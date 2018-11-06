<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AngketMitra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('angket_mitra', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("biodata_mitra_id");
            $table->integer("tahun");
            $table->string("kuesioner", 20);
            $table->text("value")->nullable();
            $table->timestamps();
            $table->softDeletes();
            //

            $table->index(['biodata_mitra_id', 'kuesioner']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
