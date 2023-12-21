<?php

namespace Database\Seeders;

use App\Models\RefLulusan;
use Illuminate\Database\Seeder;

class LulusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        RefLulusan::insert([
            ['nama' => 'SD'],
            ['nama' => 'SLTP'],
            ['nama' => 'SMA'],
            ['nama' => 'D1'],
            ['nama' => 'D2'],
            ['nama' => 'D3'],
            ['nama' => 'D4'],
            ['nama' => 'S1'],
            ['nama' => 'S2'],
            ['nama' => 'S3'],
            ['nama' => 'PKWT'],
            ['nama' => 'PKWTT'],
            ['nama' => 'Penyandang Disabilitas'],
        ]);
    }
}
