<?php

namespace Database\Seeders;

use App\Models\Pengumuman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengumuman::create([
            'judul' => 'Alumni',
            'user' => 'Koordinator Alumni',
            'isi' => 'Bagi alumni yang belum memiliki akun, dapat melakukan registrasi terlebih dahulu untuk mendapatkan akses ke sistem dan informasi terbaru.'
        ]);
        Pengumuman::create([
            'judul' => 'Tracerstudy',
            'user' => 'Koordinator Alumni',
            'isi' => 'Kepada seluruh alumni, dimohon untuk segera mengisi form tracer study guna membantu kami dalam meningkatkan kualitas pendidikan program studi. Partisipasi Anda sangat berharga, terima kasih!'
        ]);
        Pengumuman::create([
            'judul' => 'Lowongan Kerja',
            'user' => 'Koordinator Alumni',
            'isi' => 'Tersedia 15 lowonvan dengan tipe kerja freelance yang siap Anda lamar untuk memulai atau melanjutkan karir profesional Anda. Yuk cek lowonganmu pada sistem Alumni!'
        ]);
        Pengumuman::create([
            'judul' => 'Lowongan Magang',
            'user' => 'Koordinator Alumni',
            'isi' => 'Tersedia 10 peluang magang dengan tipe magang part time untuk menambah pengalaman dan meningkatkan keterampilan Anda di dunia kerja. Yuk cek lowonganmu pada sistem Alumni!'
        ]);
    }
}
