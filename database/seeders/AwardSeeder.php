<?php

namespace Database\Seeders;

use App\Models\award;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        award::create([
            'id_alumni' => '3',
            'nama_award'=> 'Student Mobility',
            'institusi_award'=> 'Universitas Gadjah Mada',
            'tingkat_award'=> 'Lokal',
            'tahun_award'=> '2020',
            'deskripsi_award'=> 'Student Mobility Awardee selama 1 Semester'
        ]);
    }
}
