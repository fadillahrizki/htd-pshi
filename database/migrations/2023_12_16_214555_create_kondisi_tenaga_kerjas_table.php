<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKondisiTenagaKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kondisi_tenaga_kerjas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perangkat_hubungan_industri_id');
            $table->json('sd');
            $table->json('sltp');
            $table->json('sma');
            $table->json('d1');
            $table->json('d2');
            $table->json('d3');
            $table->json('d4');
            $table->json('s1');
            $table->json('s2');
            $table->json('s3');
            $table->json('pkwt');
            $table->json('pkwtt');
            $table->json('penyandang_disabilitas');
            $table->timestamps();

            $table->foreign('perangkat_hubungan_industri_id')->references('id')->on('perangkat_hubungan_industris')->onDelete('cascade');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kondisi_tenaga_kerjas', function (Blueprint $table) {
            $table->dropForeign(['perangkat_hubungan_industri_id']);
        });

        Schema::dropIfExists('kondisi_tenaga_kerjas');
    }
}
