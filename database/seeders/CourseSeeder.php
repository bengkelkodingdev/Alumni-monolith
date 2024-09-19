<?php

namespace Database\Seeders;

use App\Models\course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        course::create([
            'id_alumni' => '3',
            'nama_course'=> 'Sertfikasi LSP',
            'institusi_course'=> 'UDINUS',
            'tingkat_course'=> 'Nasional',
            'tahun_course'=> '2020',
        ]);
    }
}
