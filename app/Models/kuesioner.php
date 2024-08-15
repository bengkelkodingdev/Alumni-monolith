<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kuesioner extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_alumni',
        'jns_kelamin',
        'nim',
        'tahun_masuk',
        'tahun_lulus',
        'no_hp',
        'email',
        'status',
        'bidang_job',
        'jns_job',
        'nama_job',
        'jabatan_job',
        'lingkup_job',
        'biaya_studi',
        'nama_studi',
        'prodi',
        'tgl_studi',
        'id_alumni'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_alumni');
    }
}
