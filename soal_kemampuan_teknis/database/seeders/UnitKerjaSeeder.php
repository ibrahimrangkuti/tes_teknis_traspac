<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('unit_kerjas')->insert([
            ['nama_unit_kerja' => 'Keuangan'],
            ['nama_unit_kerja' => 'Pemetaan'],
            ['nama_unit_kerja' => 'Hukum'],
            ['nama_unit_kerja' => 'Administrasi'],
        ]);
    }
}
