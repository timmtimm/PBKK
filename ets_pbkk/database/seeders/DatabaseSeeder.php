<?php

namespace Database\Seeders;

use App\Models\dokter;
use App\Models\pasien;
use App\Models\rekamMedis;
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
        \App\Models\User::factory(10)->create();
        rekamMedis::factory(4)->create();

        // dokter::create([
        //     'name' => 'timo',
        // ]);

        // pasien::create([
        //     'name' => 'timi',
        // ]);

        // pasien::create([
        //     'name' => 'timmy',
        // ]);
    }
}
