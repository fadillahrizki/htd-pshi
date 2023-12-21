<?php

namespace Database\Seeders;

use App\Models\RefFasilitas;
use App\Models\RefKategoriFasilitas;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fasilitas1 = RefKategoriFasilitas::where('nama', 'Fasilitas Keselamatan dan Kesehatan Kerja')->first()->id;
        $fasilitas2 = RefKategoriFasilitas::where('nama', 'Fasilitas Kesejahteraan')->first()->id;
        RefFasilitas::insert([
            [
                'kategori_id' => $fasilitas1,
                'nama' => 'Peralatan Perlindungan',
            ],
            [
                'kategori_id' => $fasilitas1,
                'nama' => 'Penyelenggaraan Makanan',
            ],
            [
                'kategori_id' => $fasilitas1,
                'nama' => 'Pelayanan Kesehatan',
            ],
            [
                'kategori_id' => $fasilitas1,
                'nama' => 'Ruang PK3',
            ],
            [
                'kategori_id' => $fasilitas1,
                'nama' => 'Kotak P3K',
            ],
            [
                'kategori_id' => $fasilitas1,
                'nama' => 'Alat Pelindung Diri',
            ],
            [
                'kategori_id' => $fasilitas1,
                'nama' => 'Penanganan Limbah',
            ],

            [
                'kategori_id' => $fasilitas2,
                'nama' => 'Perumahan Pekerja',
            ],
            [
                'kategori_id' => $fasilitas2,
                'nama' => 'Fasilitas Ibadah',
            ],
            [
                'kategori_id' => $fasilitas2,
                'nama' => 'Fasilitas untuk Disabilitas',
            ],
            [
                'kategori_id' => $fasilitas2,
                'nama' => 'Koperasi',
            ],
            [
                'kategori_id' => $fasilitas2,
                'nama' => 'Fasilitas Laktasi',
            ],
            [
                'kategori_id' => $fasilitas2,
                'nama' => 'Ruang Merokok',
            ],
            [
                'kategori_id' => $fasilitas2,
                'nama' => 'Armada Antar Jemput',
            ],
        ]);
    }
}
