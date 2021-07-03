<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewFasilitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_fasilitas', function (Blueprint $table) {
            $table->id('id_reviewFasilitas');
            $table->bigInteger('id_penginapan');
            $table->longText('review');
            $table->foreign('id_penginapan')->references('id_penginapan')->on('penginapans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_fasilitas');
    }
}
