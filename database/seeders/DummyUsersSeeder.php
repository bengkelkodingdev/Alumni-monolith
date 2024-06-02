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
                'name' => 'Mas Admin',
                'email' => 'admin1@gmail.com',
                'role' => 'admin',
                'password' =>'bcrypt'('123456')
            ],
            [
                'name' => 'Mas Mahasiswa',
                'email' => 'Mhs1@gmail.com',
                'role' => 'bukanadmin',
                'password' =>'bcrypt'('123456')
            ],
            [
                'name' => 'Mas Alumni',
                'email' => 'alumni1@gmail.com',
                'role' => 'alumni',
                'password' =>'bcrypt'('123456')
            ]
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
