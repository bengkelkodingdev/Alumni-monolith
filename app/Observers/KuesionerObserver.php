<?php

namespace App\Observers;

use App\Models\kuesioner;
use App\Models\User;
use App\Models\alumni;

class KuesionerObserver
{
    /**
     * Handle the Kuesioner "saved" event.
     */
    public function saved(kuesioner $kuesioner)
    {
        $user = User::find($kuesioner->id_alumni);
        if ($user && $user->role === 'alumni') {
            $this->syncAlumniData($user);
        }
    }

    /**
     * Sync alumni data.
     */
    protected function syncAlumniData(User $user)
    {
        $kuesioner = kuesioner::where('id_alumni', $user->id)->first();

        alumni::updateOrCreate(
            ['id_alumni' => $user->id],
            [
                'nama_alumni'    => $user->nama_alumni,
                'email'          => $user->email,
                'profile_picture'=> $user->profile_picture,
                'jns_kelamin'    => optional($kuesioner)->jns_kelamin,
                'nim'            => optional($kuesioner)->nim,
                'tahun_lulus'    => optional($kuesioner)->tahun_lulus,
                'no_hp'          => optional($kuesioner)->no_hp,
                'status'         => optional($kuesioner)->status,
            ]
        );
    }
}
