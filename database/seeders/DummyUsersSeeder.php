<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'nama_pengguna' => 'Dosen Koordinator Alumni S1-Teknik Informatika',
                'email' => 'alumni@websti.id',
                'role' => 'admin',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_pengguna' => 'Gata Anindhita Zalianingrum',
                'email' => 'gata@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_pengguna' => 'Mahsa Rahima Yunus',
                'email' => 'mahsa@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_pengguna' => 'Fauzan Febryan Tyowarsa',
                'email' => 'fauzan@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_pengguna' => 'Surinanda',
                'email' => 'suri@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_pengguna' => 'Elecia Budi Syabila',
                'email' => 'elecia@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_pengguna' => 'Hastaning Sekar Rani',
                'email' => 'rani@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_pengguna' => 'Qotrunnada Nabila',
                'email' => 'nada@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_pengguna' => 'Kirana Anggana Raras',
                'email' => 'raras@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_pengguna' => 'Rosa Paramitha',
                'email' => 'rosa@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_pengguna' => 'Mutiara Syabilla',
                'email' => 'rara@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ]
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}