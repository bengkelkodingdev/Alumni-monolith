<?php

namespace Database\Seeders;

use App\Models\Logang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Logang::create([
            'id_alumni' => '2',
            'NamaPerusahaan' => 'Telkom Indonesia',
            'Posisi' => 'Developer',
            'Alamat' => 'Jl. Gemah Raya I, Gemah, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50246',
            'Pengalaman' => 'Tanpa Pengalaman',
            'Gaji' => '3 Juta',
            'TipeMagang' => 'Full Time',
            'Deskripsi' => 'Menguasai pembuatan aplikasi mobile
Mampu berkomunikasi dengan baik dan aktif dalama bahasa Indonesia maupun bahasa Inggris',
            'Website' => 'https://recruitment.telkom.co.id/',
            'Email' => 'Telkomcare@gmail.com',
            'Tags' => 'Telkom Indonesia, Developer, Full Time',
            'Logo' => 'Telkom.jpg',
            'Verify' => 'verified'
        ]);

        Logang::create([
            'id_alumni' => '3',
            'NamaPerusahaan' => 'Djarum',
            'Posisi' => 'Computer User Support',
            'Alamat' => 'Jl. Jend. Ahmad Yani No.26-28, Krajan, Panjunan, Kec. Kota Kudus, Kabupaten Kudus, Jawa Tengah 59317',
            'Pengalaman' => 'Tanpa Pengalaman',
            'Gaji' => '3-5 Juta',
            'TipeMagang' => 'Kontrak',
            'Deskripsi' => 'Minimal IPK 3.5
Minimal Semester 5
Bersedia di tempatkan di Kudus',
            'Website' => 'https://career.djarum.com/home',
            'Email' => 'DjarumCare@gmail.com',
            'Tags' => 'Djarum, Kontrak, Tanpa Pengalaman',
            'Logo' => 'Djarum.jpg',
            'Verify' => 'verified'
        ]);

        Logang::create([
            'id_alumni' => '4',
            'NamaPerusahaan' => 'OVO',
            'Posisi' => 'IT Mobile',
            'Alamat' => 'Pakuwon Tower, Jl. Raya Casablanca No.Raya Lt. 46, RT.3/RW.14, Menteng Dalam, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12870',
            'Pengalaman' => 'Tanpa Pengalaman',
            'Gaji' => '2 Juta',
            'TipeMagang' => 'Kontrak',
            'Deskripsi' => 'Menguasai Bahasa Pemrograman Dart
Dapat berkomunikasi menggunakan bahasa Inggris
Dapat bekerja dibawah tekanan
Mampu beradaptasi dengan baik',
            'Website' => 'https://www.ovo.id/',
            'Email' => 'Ovo@gmail.com',
            'Tags' => 'Ovo, Mobile, Tanpa Pengalaman',
            'Logo' => 'Ovo.jpg',
            'Verify' => 'pending'
        ]);
    }
}
