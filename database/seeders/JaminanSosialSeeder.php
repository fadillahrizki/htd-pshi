<?php

namespace Database\Seeders;

use App\Models\RefJaminanSosial;
use Illuminate\Database\Seeder;

class JaminanSosialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        RefJaminanSosial::insert([
            ['nama' => 'Program JKK'],
            ['nama' => 'Program JHT'],
            ['nama' => 'Program JKM'],
            ['nama' => 'Program JP'],
            ['nama' => 'Program JKP'],
        ]);
    }
}
