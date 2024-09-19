<?php

namespace Database\Seeders;

use App\Models\internship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InternshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        internship::create([
            'id_alumni' => '3',
            'nama_intern'=> 'Telkom Indonesia',
            'periode_masuk_intern'=> 'Januari 2021',
            'periode_keluar_intern'=> 'Juli 2021',
            'jabatan_intern'=> 'IT Mobile Developer',
            'kota'=> 'Jakarta',
            'negara'=> 'Indonesia',
            'catatan'=> 'Mobile developer mengunakan bahasa pemrograman dart'
        ]);
    }
}
