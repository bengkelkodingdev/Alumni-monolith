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
                'nama_alumni' => 'Dosen Koordinator Alumni S1-Teknik Informatika',
                'email' => 'alumni@websti.id',
                'role' => 'admin',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_alumni' => 'Gata Anindhita Zalianingrum',
                'email' => 'gata@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_alumni' => 'Mahsa Rahima Yunus',
                'email' => 'mahsa@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_alumni' => 'Fauzan Febryan Tyowarsa',
                'email' => 'fauzan@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_alumni' => 'Surinanda',
                'email' => 'suri@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_alumni' => 'Elecia Budi Syabila',
                'email' => 'elecia@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_alumni' => 'Hastaning Sekar Rani',
                'email' => 'rani@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_alumni' => 'Qotrunnada Nabila',
                'email' => 'nada@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_alumni' => 'Kirana Anggana Raras',
                'email' => 'raras@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_alumni' => 'Rosa Paramitha',
                'email' => 'rosa@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123')
            ],
            [
                'nama_alumni' => 'Mutiara Syabilla',
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