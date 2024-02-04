<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengaduanIds = DB::table('pengaduans')->pluck('id')->toArray();
        
        if (!empty($pengaduanIds)) {
            DB::table('pengaduans')->insert([
                'pengaduan_id' => $pengaduansIds[array_rand($pengaduanIds)],
                'tgl_pengaduan' => now(),
                'nik' => Str::random(),
                'isi_laporan' => Str::random(),
                'foto' => Str::random(255),
                'status' => collect(['proses', 'selesai'])->random(),
            ]);
        } 
    }
}
