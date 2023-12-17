<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerangkatHubunganIndustrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perangkat_hubungan_industris', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_umum_id');
            $table->string('perangkat_hubungan_kerja');
            $table->string('perjanjian_kerja');
            $table->string('lks_bipartite');
            $table->string('serikat_pekerja_buruh');
            $table->string('nama_serikat_pekerja_buruh');
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
        Schema::table('perangkat_hubungan_industris', function (Blueprint $table) {
            $table->dropForeign(['data_umum_id']);
        });

        Schema::dropIfExists('perangkat_hubungan_industris');
    }
}
