<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organization extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_org',
        'periode_org',
        'link_org',
        'tingkat_org',
        'jns_org',
        'jabatan_org'
    ];
}
