<?php

namespace Database\Seeders;

use App\Models\Loker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Loker::create([
            'NamaPerusahaan' => 'Universitas Dian Nuswantoro',
            'Posisi' => 'Dosen',
            'Alamat' => 'Jl. Imam Bonjol No.207, Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131',
            'Pengalaman' => 'Minimal 1 Tahun',
            'Gaji' => '5-7 Juta',
            'TipeKerja' => 'Full Time',
            'Deskripsi' => 'Dapat Menguasai Materi Tentang Ilmu Komputer
Minimal S2
Dapat Mengajar Menggunakan Bahasa Inggris',
            'Website' => 'https://dinus.ac.id/',
            'Email' => 'dinus@mhs.dinus.ac.id',
            'Tags' => 'UDINUS, Dosen, Full Time',
            'Logo' => 'Logo Udinus - Official 02.png',
            'Verify' => 'verified'
        ]);

        Loker::create([
            'NamaPerusahaan' => 'Tokopedia',
            'Posisi' => 'Developer',
            'Alamat' => 'Jl. Gemah Raya I, Gemah, Kec.Pedurungan, Kota Semarang, Jawa Tengah 50246',
            'Pengalaman' => 'Minimal 2 Tahun',
            'Gaji' => '5-6 Juta',
            'TipeKerja' => 'Sementara',
            'Deskripsi' => 'Memahami bahasa inggris
Menguasai berbagai bahasa pemrograman',
            'Website' => 'https://www.tokopedia.com/about/contact-us',
            'Email' => 'Tokopedia@gmail.com',
            'Tags' => 'Tokopedia, Marketing, Sementara',
            'Logo' => 'tokped2.jpeg',
            'Verify' => 'verified'
        ]);

        Loker::create([
            'NamaPerusahaan' => 'Shopee',
            'Posisi' => 'UI/UX Developer',
            'Alamat' => 'Pakuwon Tower, Jl. Raya Casablanca No.Raya Lt. 46, RT.3/RW.14, Menteng Dalam, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12870',
            'Pengalaman' => 'Fresh Graduate',
            'Gaji' => '4-5 Juta',
            'TipeKerja' => 'Freelance',
            'Deskripsi' => 'Menguasai UI/UX
Dapat bekerja secara kelompok',
            'Website' => 'https://careers.shopee.co.id/',
            'Email' => 'shopee@gmail.com',
            'Tags' => 'Shopee, Fresh Graduate, UI/UX',
            'Logo' => 'shopee2.png',
            'Verify' => 'pending'
        ]);
    }
}
