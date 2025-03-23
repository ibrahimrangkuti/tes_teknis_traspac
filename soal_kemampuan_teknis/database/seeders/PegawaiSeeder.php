<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    public function run()
    {
        DB::table('pegawais')->insert([
            [
                'nip' => '12130569001',
                'nama' => 'Saifulloh Rifai',
                'tempat_lahir' => 'Banjarnegara',
                'alamat' => 'Jl. Melon No.16 Dian Asri',
                'tgl_lahir' => '1968-03-15',
                'jenis_kelamin' => 'L',
                'golongan' => 'IV/e',
                'eselon' => 'I',
                'jabatan_id' => 1,
                'tempat_tugas' => 'Jakarta',
                'agama' => 'Islam',
                'unit_kerja_id' => 1,
                'no_hp' => '081234567890',
                'npwp' => '12.345.678.9-012.000',
            ],
            [
                'nip' => '12130569002',
                'nama' => 'Ahmad Fauzan',
                'tempat_lahir' => 'Jakarta',
                'alamat' => 'Jl. golonganf Komp Bakosurtanal No.39',
                'tgl_lahir' => '1968-08-27',
                'jenis_kelamin' => 'L',
                'golongan' => 'IV/a',
                'eselon' => 'II',
                'jabatan_id' => 2,
                'tempat_tugas' => 'Jakarta',
                'agama' => 'Islam',
                'unit_kerja_id' => 1,
                'no_hp' => '081298765432',
                'npwp' => '13.456.789.0-123.000',
            ],
            [
                'nip' => '12130569003',
                'nama' => 'Budi Santoso',
                'tempat_lahir' => 'Surabaya',
                'alamat' => 'Jl. Mendut III, Puri Nirwana I RT.03/16',
                'tgl_lahir' => '1987-07-10',
                'jenis_kelamin' => 'L',
                'golongan' => 'III/c',
                'eselon' => 'III',
                'jabatan_id' => 3,
                'tempat_tugas' => 'Bandung',
                'agama' => 'Islam',
                'unit_kerja_id' => 2,
                'no_hp' => '081377788899',
                'npwp' => '14.567.890.1-234.000',
            ],
            [
                'nip' => '12130569004',
                'nama' => 'Dedi Pratama',
                'tempat_lahir' => 'Semarang',
                'alamat' => 'Perum Jombor Baru',
                'tgl_lahir' => '1987-05-03',
                'jenis_kelamin' => 'L',
                'golongan' => 'III/b',
                'eselon' => 'III',
                'jabatan_id' => 4,
                'tempat_tugas' => 'Yogyakarta',
                'agama' => 'Islam',
                'unit_kerja_id' => 2,
                'no_hp' => '081355566677',
                'npwp' => '15.678.901.2-345.000',
            ],
            [
                'nip' => '12130569005',
                'nama' => 'Rizky Ananda',
                'tempat_lahir' => 'Trenggalek',
                'alamat' => 'Jl. Raya Trenggalek No.45',
                'tgl_lahir' => '1992-07-07',
                'jenis_kelamin' => 'L',
                'golongan' => 'III/a',
                'eselon' => 'IV/e',
                'jabatan_id' => 5,
                'tempat_tugas' => 'Surabaya',
                'agama' => 'Islam',
                'unit_kerja_id' => 3,
                'no_hp' => '081399988877',
                'npwp' => '16.789.012.3-456.000',
            ],
            [
                'nip' => '12130569006',
                'nama' => 'Siti Rahmawati',
                'tempat_lahir' => 'Bandung',
                'alamat' => 'Bella Casa Residence Blok E.1 No.9',
                'tgl_lahir' => '1963-06-05',
                'jenis_kelamin' => 'P',
                'golongan' => 'IV/c',
                'eselon' => 'II',
                'jabatan_id' => 6,
                'tempat_tugas' => 'Jakarta',
                'agama' => 'Islam',
                'unit_kerja_id' => 4,
                'no_hp' => '081322233344',
                'npwp' => '17.890.123.4-567.000',
            ],
            [
                'nip' => '12130569007',
                'nama' => 'Hadi Suryono',
                'tempat_lahir' => 'Medan',
                'alamat' => 'Jl. Sisingamangaraja No.21',
                'tgl_lahir' => '1985-04-12',
                'jenis_kelamin' => 'L',
                'golongan' => 'III/b',
                'eselon' => 'III',
                'jabatan_id' => 4,
                'tempat_tugas' => 'Medan',
                'agama' => 'Islam',
                'unit_kerja_id' => 2,
                'no_hp' => '081345678910',
                'npwp' => '18.901.234.5-678.000',
            ],
            [
                'nip' => '12130569008',
                'nama' => 'Fauziah Rahmat',
                'tempat_lahir' => 'Makassar',
                'alamat' => 'Jl. Sultan Hasanuddin No.10',
                'tgl_lahir' => '1990-09-15',
                'jenis_kelamin' => 'P',
                'golongan' => 'III/a',
                'eselon' => 'IV/e',
                'jabatan_id' => 5,
                'tempat_tugas' => 'Makassar',
                'agama' => 'Islam',
                'unit_kerja_id' => 3,
                'no_hp' => '081398765432',
                'npwp' => '19.012.345.6-789.000',
            ],
            [
                'nip' => '12130569009',
                'nama' => 'Arif Wibowo',
                'tempat_lahir' => 'Solo',
                'alamat' => 'Jl. Slamet Riyadi No.5',
                'tgl_lahir' => '1978-12-30',
                'jenis_kelamin' => 'L',
                'golongan' => 'IV/d',
                'eselon' => 'I',
                'jabatan_id' => 1,
                'tempat_tugas' => 'Solo',
                'agama' => 'Islam',
                'unit_kerja_id' => 1,
                'no_hp' => '081311122233',
                'npwp' => '20.123.456.7-890.000',
            ],
        ]);
    }
}
