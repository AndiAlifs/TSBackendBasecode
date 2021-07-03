<?php

use Brick\Math\BigInteger;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasusCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasus_covids', function (Blueprint $table) {
            $table->id('id_kasus');
            $table->BigInteger('jumlahKasus');
            $table->unsignedBigInteger('id_lokasi');
            $table->date('last_update');
            $table->foreign('id_lokasi')->references('id_lokasi')->on('lokasis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kasus_covids');
    }
}
