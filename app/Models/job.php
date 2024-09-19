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
        'jabatan_job',   
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