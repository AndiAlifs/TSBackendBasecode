<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PenginapanFasilitassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penginapan_fasilitas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_penginapan');
            $table->unsignedBigInteger('id_fasilitas');
            $table->foreign('id_penginapan')->references('id_penginapan')->on('penginapans')->onDelete('cascade');
            $table->foreign('id_fasilitas')->references('id_fasilitas')->on('fasilitas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penginapan_fasilitas');
    }
}
