<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable implements MustVerifyEmail
{
    
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_alumni',
        'email',
        'password',
        'role',
        'profile_picture',
        'code',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the kuesioners for the user.
     */
        public function alumni()
    {
        return $this->hasOne(alumni::class, 'id_alumni', 'id');
    }
    public function kuesioners()
    {
        return $this->hasMany(kuesioner::class, 'id_alumni', 'id');
    }
    public function academics()
    {
        return $this->hasMany(academic::class);
    }
    public function jobs()
    {
        return $this->hasMany(job::class);
    }
    public function internships()
    {
        return $this->hasMany(internship::class);
    }
    public function organizations()
    {
        return $this->hasMany(organization::class);
    }
    public function awards()
    {
        return $this->hasMany(award::class);
    }
    public function courses()
    {
        return $this->hasMany(course::class);
    }
    public function skills()
    {
        return $this->hasMany(skill::class);
    }
}
