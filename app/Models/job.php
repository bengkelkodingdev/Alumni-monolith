<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_job',
        'periode_masuk_job',
        'periode_keluar_job',
        'alamat_job',
        'lingkup_job',
        'bidang_job',
        'jns_job',
        'jabatan_job',
    ];
}