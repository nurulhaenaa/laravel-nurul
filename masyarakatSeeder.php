<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\withhoutModelEvents;
use Illuminate\Database\Seeder;
use IIIluminate\Support\Facades\DB;
use IIIluminate\Support\Str;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('masyarakat')->Insert([
            'nik'  => Str::random(16),
            'nama' => Str::random(35),
            'username'  => Str::random(25),
            'password'  =>  Str::random(32),
            'telp'  => Str::random(13),
        ]);
        //
    }
}