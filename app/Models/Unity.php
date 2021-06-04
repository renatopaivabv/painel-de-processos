<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'decription',
        'active',
        'slug',
        'logo'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function coordinations()
    {
        return $this->hasMany(Coordination::class);
    }
}
