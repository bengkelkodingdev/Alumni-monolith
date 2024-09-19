<?php

namespace Database\Seeders;

use App\Models\job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        job::create([
            'id_alumni' => '3',
            'nama_job'=> 'Telkom Indonesia',
            'periode_masuk_job'=> 'September 2021',
            'periode_keluar_job'=> '-',
            'jabatan_job'=> 'Mobile Developer',   
            'kota'=> 'Jakarta',
            'negara'=> 'Indonesia',
            'catatan'=> 'Masih bekerja dalam bidang mobile developer secara full time '
        ]);
    }
}
