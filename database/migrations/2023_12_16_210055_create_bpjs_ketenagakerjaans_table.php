<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBpjsKetenagakerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bpjs_ketenagakerjaans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_umum_id');
            $table->string('no_bpjs_ketenagakerjaan_perusahaan');
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
        Schema::table('bpjs_ketenagakerjaans', function (Blueprint $table) {
            $table->dropForeign(['data_umum_id']);
        });

        Schema::dropIfExists('bpjs_ketenagakerjaans');
    }
}
