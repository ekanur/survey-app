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
            $table->string("kuesioner", 20);
            $table->string("value", 200)->nullable();
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
        schema::drop('angket_alumni');
    }
}
