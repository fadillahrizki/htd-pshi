<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_umum_id');
            $table->unsignedBigInteger('fasilitas_id');

            $table->timestamps();
            
            $table->foreign('data_umum_id')->references('id')->on('data_umums')->onDelete('cascade');
            $table->foreign('fasilitas_id')->references('id')->on('ref_fasilitas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fasilitas');
    }
}
