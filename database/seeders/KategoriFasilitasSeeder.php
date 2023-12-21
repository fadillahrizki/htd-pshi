<?php

namespace Database\Seeders;

use App\Models\RefKategoriFasilitas;
use Illuminate\Database\Seeder;

class KategoriFasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        RefKategoriFasilitas::insert([
            [
                'nama' => 'Fasilitas Keselamatan dan Kesehatan Kerja'
            ],
            [
                'nama' => 'Fasilitas Kesejahteraan'
            ],
        ]);
    }
}
