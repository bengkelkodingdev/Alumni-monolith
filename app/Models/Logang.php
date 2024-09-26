<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Logang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function scopeFilter($query, array $filters) {
        if ($filters['Tags'] ?? false) {
            $query->where('Tags', 'like', '%'. request('Tags').'%');
}


        if($filters['search'] ?? false) {
            $query->where('Posisi', 'like', '%' . request('search') . '%')
                ->orWhere('Deskripsi', 'like', '%' . request('search') . '%')
                ->orWhere('Tags', 'like', '%' . request('search') . '%');
        }

    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_alumni');
    }
}
