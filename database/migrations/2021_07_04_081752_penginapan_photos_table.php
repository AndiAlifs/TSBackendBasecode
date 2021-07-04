<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PenginapanPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penginapan_photos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_penginapan');
            $table->unsignedBigInteger('id_photos');
            $table->foreign('id_penginapan')->references('id_penginapan')->on('penginapans')->onDelete('cascade');
            $table->foreign('id_photos')->references('id')->on('photos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penginapan_photos');
    }
}
