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
        'nama_studi',
        'prodi',
        'ipk',
        'tahun_masuk',
        'tahun_lulus',
        'kota',
        'negara',
        'catatan',
        'id_alumni'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_alumni');
    }
}