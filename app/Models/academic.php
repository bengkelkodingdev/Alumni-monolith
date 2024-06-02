<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class academic extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nim',
        'nama_mhs',
        'email',
        'ipk',
        'judul_skripsi',
        'dosen_wali',
        'tahun_lulus'
    ];
}