<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\withhoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class masyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('masyarakats')->insert([
            'nik'  => Str::random(16),
            'nama' => Str::random(35),
            'username'  => Str::random(25),
            'password'  =>  Str::random(32),
            'telp'  => Str::random(13),
        ]);
        //
    }
}
