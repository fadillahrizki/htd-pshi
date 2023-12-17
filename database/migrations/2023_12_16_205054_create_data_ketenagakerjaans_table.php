<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKetenagakerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_ketenagakerjaans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_umum_id');
            $table->string('waktu_kerja');
            $table->string('tingkat_upah_terendah');
            $table->string('tingkat_upah_tertinggi');
            $table->string('struktur_skala_upah');
            $table->timestamps();
          
            $table->foreign('data_umum_id')->references('id')->on('data_umums')->onDelete('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_ketenagakerjaans', function (Blueprint $table) {
            $table->dropForeign(['data_umum_id']);
        });

        Schema::dropIfExists('data_ketenagakerjaans');
    }
}
