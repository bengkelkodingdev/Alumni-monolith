<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumni extends Model
{
    use HasFactory;
    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_alumni', 'jns_kelamin', 'nim', 'no_hp', 'email', 'status', 'profile_picture',
    ];
    public function user()
    {
        return $this->hasOne(User::class, 'nama_alumni', 'nama_alumni');
        return $this->hasOne(User::class, 'email', 'email');
    }
    public function kuesioner()
    {
        return $this->hasMany(User::class, 'jns_kelamin', 'jns_kelamin');
        return $this->hasMany(User::class, 'nim', 'nim');
        return $this->hasMany(User::class, 'no_hp', 'email');
    }
}