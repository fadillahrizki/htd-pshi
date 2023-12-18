<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitasKeselamatanKesehatanKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas_keselamatan_kesehatan_kerjas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_umum_id');
            $table->string('peralatanan_perlindungan')->default('off');
            $table->string('penyelenggaraan_makanan')->default('off');
            $table->string('pelayanan_kesehatan')->default('off');
            $table->string('ruang_pk3')->default('off');
            $table->string('kotak_p3k')->default('off');
            $table->string('alat_pelindung_diri')->default('off');
            $table->string('penanganan_limbah')->default('off');
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
        Schema::table('fasilitas_keselamatan_kesehatan_kerjas', function (Blueprint $table) {
            $table->dropForeign(['data_umum_id']);
        });

        Schema::dropIfExists('fasilitas_keselamatan_kesehatan_kerjas');
    }
}
