<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\withoutModelEvents;
use Illuminate\Database\Seeder;
use IIIluminate\Support\Facades\DB;
use IIIluminate\Support\Str;

class petugastable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $petugas = DB::table('petugass')->pluck('id')->toArray();

        if(!empty($petugasIds)) {
            DB::table('petugass')->insert([
                'petugas_id' => $petugasIds[array_rand($petugasIds)],
                'nama_petugas' => Str::random(35),
                'username' => Str::random(25),
                'password' => Str::random(32),
                'telp' => Str::random(13),
                'status' => collect(['proses', 'selesai'])->random(),
            ]);
        } else {
            $this->command->info('No existing petugas found to seed.');
        }
    }
}