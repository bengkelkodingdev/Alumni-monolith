<?php

namespace Database\Seeders;

use App\Models\organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        organization::create([
            'id_alumni' => '3',
            'nama_org'=> 'AIESEC',
            'periode_masuk_org'=> '2022',
            'periode_keluar_org'=> '2023',
            'jabatan_org'=> 'Team Leader of Marketing',
            'kota'=> 'Semarang',
            'negara'=> 'Indonesia',
            'catatan'=> 'Local Volunteer'
        ]);
    }
}
