<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitasKesejahteraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas_kesejahteraans', function (Blueprint $table) {
            $table->id();            
            $table->unsignedBigInteger('data_umum_id');
            $table->string('perumahan_pekerja')->default('off');
            $table->string('fasilitas_ibadah')->default('off');
            $table->string('fasilitas_untuk_disabilitas')->default('off');
            $table->string('koperasi')->default('off');
            $table->string('fasilitas_laktasi')->default('off');
            $table->string('ruang_merokok')->default('off');
            $table->string('armada_antar_jemput')->default('off');
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
        
        Schema::table('fasilitas_kesejahteraans', function (Blueprint $table) {
            $table->dropForeign(['data_umum_id']);
        });

        Schema::dropIfExists('fasilitas_kesejahteraans');
    }
}
