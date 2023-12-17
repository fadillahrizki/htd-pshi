<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataUmumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_umums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nama_perusahaan');
            $table->string('alamat_perusahaan');
            $table->string('no_telepon');
            $table->string('email');
            $table->string('jenis_usaha');
            $table->string('nama_pemilik_perusahaan');
            $table->string('alamat_pemilik_perusahaan');
            $table->string('pendirian_perusahaan');
            $table->string('no_akte_pendirian');
            $table->string('status_perusahaan');
            $table->string('status_kepemilikan');
            $table->string('status')->default('Waiting');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_umums', function (Blueprint $table) {
            $table->dropForeign('user_id');
        });

        Schema::dropIfExists('data_umums');
    }
}
