<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class internship extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_intern',
        'periode_masuk_intern',
        'periode_keluar_intern',
        'jabatan_intern',
        'kota',
        'negara',
        'catatan'
    ];
}
