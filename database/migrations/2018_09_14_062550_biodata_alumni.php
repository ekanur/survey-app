<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BiodataAlumni extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('biodata_alumni', function (Blueprint $table) {
        $table->increments('id');
        $table->string("nama", 75);
        $table->string("email", 90);
        $table->string("prodi", 90);
        $table->string("fakultas", 50);
        $table->unsignedSmallInteger("tahun_masuk");
        $table->unsignedSmallInteger("tahun_lulus");
        $table->unsignedSmallInteger("tahun_bekerja");
        $table->string("masa_tunggu", 50);
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
       Schema::drop('biodata_alumni');
   }
}
