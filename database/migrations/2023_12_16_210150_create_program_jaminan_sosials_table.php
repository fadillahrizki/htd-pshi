<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramJaminanSosialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_jaminan_sosials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bpjs_ketenagakerjaan_id');
            $table->json('program_jkk');
            $table->json('program_jht');
            $table->json('program_jkm');
            $table->json('program_jp');
            $table->json('program_jkp');
            $table->timestamps();

            $table->foreign('bpjs_ketenagakerjaan_id')->references('id')->on('bpjs_ketenagakerjaans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('program_jaminan_sosials', function (Blueprint $table) {
            $table->dropForeign('bpjs_ketenagakerjaan_id');
        });

        Schema::dropIfExists('program_jaminan_sosials');
    }
}
