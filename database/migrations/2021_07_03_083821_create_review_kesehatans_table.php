<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewKesehatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_kesehatans', function (Blueprint $table) {
            $table->id('id_reviewKesehatan');
            $table->integer('id_penginapan');
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
        Schema::dropIfExists('review_kesehatans');
    }
}
