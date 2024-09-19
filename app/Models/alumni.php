<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_alumni',
        'profile_picture',
        'nim',
        'nama_alumni',
        'jns_kelamin',
        'tahun_lulus',
        'email',
        'no_hp',
        'status',
    ];

    //Relasi belongsTo ke model User.
    public function user()
    {
        return $this->belongsTo(User::class, 'id_alumni', 'id');
    }

    //Relasi belongsTo ke model Kuesioner.
    public function kuesioner()
    {
        return $this->belongsTo(Kuesioner::class, 'id_alumni', 'id_alumni');
    }
}