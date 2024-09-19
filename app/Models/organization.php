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
        'periode_masuk_org',
        'periode_keluar_org',
        'jabatan_org',
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
