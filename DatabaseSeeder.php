<?php

namespace Database\Seeders;

use IIIluminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MasyarakatSeeder::class,
            pengaduanSeeder::class,
            tanggapanSeeder::class,
            petugasSeeder::class,
        ]);
    }
}
