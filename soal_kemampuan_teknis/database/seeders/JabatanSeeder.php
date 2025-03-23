<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jabatans')->insert([
            ['nama_jabatan' => 'Kepala Sekretariat Utama'],
            ['nama_jabatan' => 'Penyusun laporan keuangan'],
            ['nama_jabatan' => 'Surveyor Pemetaan Pertama'],
            ['nama_jabatan' => 'Analis Data Survei dan Pemetaan'],
            ['nama_jabatan' => 'Perancang Per-UU-an Utama'],
            ['nama_jabatan' => 'Kepala Biro Perencanaan, Kepegawaian'],
        ]);
    }
}
