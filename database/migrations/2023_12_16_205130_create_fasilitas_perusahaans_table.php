<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitasPerusahaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas_perusahaans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_umum_id');
            $table->string('fasilitas_keselamatan_kesehatan_kerja');
            $table->string('fasilitas_kesejahteraan');
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
        Schema::table('fasilitas_perusahaans', function (Blueprint $table) {
            $table->dropForeign(['data_umum_id']);
        });

        Schema::dropIfExists('fasilitas_perusahaans');
    }
}
