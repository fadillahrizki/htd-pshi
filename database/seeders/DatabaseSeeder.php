<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // User::truncate();
        User::create([
            'name'   => 'Administrator',
            'email'  => 'admin@admin.com',
            'role'  => 'Admin',
            'status' => 'Verified',
            'password' => bcrypt('password'),
        ]);

        $this->call([
            KategoriFasilitasSeeder::class,
            FasilitasSeeder::class,
            JaminanSosialSeeder::class,
            LulusanSeeder::class,
            CutiSeeder::class,
        ]);
    }
}
