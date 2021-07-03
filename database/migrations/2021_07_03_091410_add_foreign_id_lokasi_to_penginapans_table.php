<?php

use Illuminate\Database\Eloquent\Factories\BelongsToManyRelationship;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignIdLokasiToPenginapansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penginapans', function (Blueprint $table) {
            $table->foreign('id_lokasi')->references('id_lokasi')->on('lokasis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penginapans', function (Blueprint $table) {
            $table->dropForeign(['id_lokasi']);
        });
    }
}
