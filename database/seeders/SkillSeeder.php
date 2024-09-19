<?php

namespace Database\Seeders;

use App\Models\skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        skill::create([
            'id_alumni' => '3',
            'kerjasama_skill'=> 'Baik',
            'ahli_skill'=> 'Baik',
            'inggris_skill'=> 'Sangat Baik',
            'komunikasi_skill'=> 'Sangat Baik',
            'pengembangan_skill'=> 'Sangat Baik',
            'kepemimpinan_skill'=> 'Baik',
            'etoskerja_skill'=> 'Baik',
        ]);
    }
}
