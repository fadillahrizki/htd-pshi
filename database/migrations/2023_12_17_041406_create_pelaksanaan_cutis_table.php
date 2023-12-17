<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelaksanaanCutisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelaksanaan_cutis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_umum_id');
            $table->string('tahunan')->default('off');
            $table->string('haid')->default('off');
            $table->string('melahirkan')->default('off');
            $table->string('sakit')->default('off');
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
        Schema::table('pelaksanaan_cutis', function (Blueprint $table) {
            $table->dropForeign(['data_umum_id']);
        });

        Schema::dropIfExists('pelaksanaan_cutis');
    }
}
