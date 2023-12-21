<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJaminanSosialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jaminan_sosials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_umum_id');
            $table->unsignedBigInteger('jamsos_id');
            $table->integer('jumlah_lk');
            $table->integer('jumlah_pr');

            $table->timestamps();
            
            $table->foreign('data_umum_id')->references('id')->on('data_umums')->onDelete('cascade');
            $table->foreign('jamsos_id')->references('id')->on('ref_jaminan_sosials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jaminan_sosials');
    }
}
