<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AngketAlumni extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angket_alumni', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("biodata_alumni_id");
            $table->integer("tahun");
            $table->string("kuesioner", 30);
            $table->text("value")->nullable();
            $table->timestamps();
            $table->softDeletes();
            //

            $table->index(['biodata_alumni_id', 'kuesioner']);
        });//
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
