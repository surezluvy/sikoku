<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\Soal2d::factory(10)->create();
        \App\Models\SoalPilgan::factory(10)->create();
        \App\Models\Key2d::factory(10)->create();
        \App\Models\KeyPilgan::factory(10)->create();
        \App\Models\PaketSoal::factory(10)->create();
        \App\Models\Transaksi::factory(10)->create();
        \App\Models\BatchUjian::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
