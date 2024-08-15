<?php

namespace Database\Seeders;

use App\Models\kuesioner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TracerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        kuesioner::create([
            'id_alumni' => '2',
            'nama_alumni' => 'Gata Anindhita Zalianingrum',
            'jns_kelamin' => 'Perempuan',
            'nim' => 'A11.2021.13439',
            'tahun_masuk' => '2020',
            'tahun_lulus' => '2024',
            'no_hp' => '0812',
            'email' => 'gata@email',
            'status' => 'Melanjutkan Pendidikan',
            'jns_job' => '',
            'nama_job' => '',
            'jabatan_job' => '',
            'lingkup_job' => '',
            'biaya_studi' => 'Beasiswa',
            'nama_studi' => 'Udinus',
            'prodi' => 'TI',
            'tgl_studi' => '2024-10-01'
        ]);

        kuesioner::create([
            'id_alumni' => '3',
            'nama_alumni' => 'Mahsa Rahima Yunus',
            'jns_kelamin' => 'Perempuan',
            'nim' => 'A11.2021.13457',
            'tahun_masuk' => '2020',
            'tahun_lulus' => '2024',
            'no_hp' => '0811',
            'email' => 'mahsa@email',
            'status' => 'Menikah/Mengurus Keluarga',
            'jns_job' => '',
            'nama_job' => '',
            'jabatan_job' => '',
            'lingkup_job' => '',
            'biaya_studi' => '',
            'nama_studi' => '',
            'prodi' => '',
            'tgl_studi' => null
        ]);

        kuesioner::create([
            'id_alumni' => '4',
            'nama_alumni' => 'Fauzan Febryan Tyowarsa',
            'jns_kelamin' => 'Laki-Laki',
            'nim' => 'A11.2021.13422',
            'tahun_masuk' => '2020',
            'tahun_lulus' => '2024',
            'no_hp' => '0822',
            'email' => 'fauxan@email',
            'status' => 'Belum Memungkinkan Bekerja',
            'jns_job' => '',
            'nama_job' => '',
            'jabatan_job' => '',
            'lingkup_job' => '',
            'biaya_studi' => '',
            'nama_studi' => '',
            'prodi' => '',
            'tgl_studi' => null
        ]);

    }
}
