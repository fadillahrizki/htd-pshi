<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMasaBerlakuColumnToDataUmums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_umums', function (Blueprint $table) {
            //
            $table->date('tanggal_awal')->nullable();
            $table->date('tanggal_akhir')->nullable();
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
            //
            $table->dropColumn(['tanggal_awal','tanggal_akhir']);
        });
    }
}
