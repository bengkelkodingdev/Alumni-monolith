<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\alumni;
use App\Models\kuesioner;
use Illuminate\Support\Facades\DB;

class SyncAlumniData extends Command
{
    protected $signature = 'sync:alumni-data';
    protected $description = 'Sinkronisasi data alumni dari beberapa tabel ke tabel alumnis';

    public function handle()
    {
        // Ambil seluruh users dengan role alumni dari kolom role
        $users = User::where('role', 'alumni')->get();

        $this->info('Sinkronisasi data alumni dimulai...');

        DB::transaction(function () use ($users) {
            foreach ($users as $user) {
                // Ambil data dari tabel kuesioners jika ada
                $kuesioner = kuesioner::where('id_alumni', $user->id)->first();

                // Ambil profile picture dari user, atau null jika tidak ada
                $profilePicture = $user->profile_picture ?? null;

                // Buat atau update data di tabel alumnis
                alumni::updateOrCreate(
                    ['id_alumni' => $user->id],
                    [
                        'nama_alumni'    => $user->nama_alumni,
                        'email'          => $user->email,
                        'profile_picture'=> $profilePicture, 
                        'jns_kelamin'    => optional($kuesioner)->jns_kelamin,
                        'nim'            => optional($kuesioner)->nim,
                        'tahun_lulus'    => optional($kuesioner)->tahun_lulus,
                        'no_hp'          => optional($kuesioner)->no_hp,
                        'status'         => optional($kuesioner)->status,
                    ]
                );
            }
        });

        $this->info('Sinkronisasi data alumni selesai.');
    }
}
