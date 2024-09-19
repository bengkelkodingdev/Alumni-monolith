<?php

namespace Database\Seeders;

use App\Models\academic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        academic::create([
            'id_alumni' => '3',
            'nama_studi' => 'UDINUS',
            'prodi'=> 'TI',
            'ipk'=> '3.93',
            'tahun_masuk'=> '2019',
            'tahun_lulus'=> '2021',
            'kota'=> 'Semarang',
            'negara'=> 'Indonesia',
            'catatan'=> 'Cumlaude'
        ]);
    }
}
