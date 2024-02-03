<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use IIluminate\Support\Facades\DB;
use IIIluminate\Support\Str;

class cPengaduansSeeder extends Seeder
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
        } else {
            $this->command->info('No existing pengaduans found to seed.');
        }
    }
}
