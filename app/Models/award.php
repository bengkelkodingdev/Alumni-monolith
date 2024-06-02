<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class award extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_award',
        'institusi_award',
        'tingkat_award',
        'tahun_award',
        'deskripsi_award'
    ];
}
