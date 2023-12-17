<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasusPerselisihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasus_perselisihans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_umum_id');
            $table->string('pemutusan_hubungan_kerja');
            $table->string('serikat_pekerja_buruh');
            $table->string('mogok_kerja');
            $table->string('lock_out');
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
        
        Schema::table('kasus_perselisihans', function (Blueprint $table) {
            $table->dropForeign(['data_umum_id']);
        });

        Schema::dropIfExists('kasus_perselisihans');
    }
}
