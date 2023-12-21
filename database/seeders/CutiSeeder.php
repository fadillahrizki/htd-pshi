<?php

namespace Database\Seeders;

use App\Models\RefCuti;
use Illuminate\Database\Seeder;

class CutiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        RefCuti::insert([
            ['nama' => 'Cuti Tahunan'],
            ['nama' => 'Cuti Haid'],
            ['nama' => 'Cuti Melahirkan'],
            ['nama' => 'Cuti Sakit'],
        ]);
    }
}
