<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use IIIluminate\Support\Str;

class TanggapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $tanggapanIds = DB::table('tanggapans')->pluck('id_tanggapan')->toArray(); //Assuming 'id' is the primary key
       $tangaapanIds = DB::table('pengaduans')->pluck('id')->toArray();
       $petugas = DB::table('petugases')->pluck('id')->toArray();
       
       if (!empty($tangapanIds) && !empty($pengaduanIds) && !empty($petugasIds)) {
        DB::table('tanggapaans')->insert([
            'tanggapan_id' => $tanggapansId[array_rand($tanggapanIds)],
            'pengaduan_id' => $pengaduanIds[array_rand($pengaduanIds)],
            'tgl_tanggapan' => now(),
            'tanggapan' => Str::random(),
            'petugas_id' => $petugasIds[array_rand($petugas)],
        ]);
       } 
    }
}
