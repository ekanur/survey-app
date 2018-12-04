<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AngketTendik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angket_tendik', function (Blueprint $table) {
            $table->increments('id');
            $table->string("tendik_nip", 25);
            $table->integer("tahun");
            $table->string("kuesioner", 20);
            $table->text("value")->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['tendik_nip', 'kuesioner']);
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
