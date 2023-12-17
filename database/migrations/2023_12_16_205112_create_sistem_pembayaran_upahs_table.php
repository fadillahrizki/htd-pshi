<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSistemPembayaranUpahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistem_pembayaran_upahs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_ketenagakerjaan_id');
            $table->string('harian');
            $table->string('borongan');
            $table->string('bulanan');
            $table->timestamps();

            $table->foreign('data_ketenagakerjaan_id')->references('id')->on('data_ketenagakerjaans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sistem_pembayaran_upahs', function (Blueprint $table) {
            $table->dropForeign('data_ketenagakerjaan_id');
        });

        Schema::dropIfExists('sistem_pembayaran_upahs');
    }
}
