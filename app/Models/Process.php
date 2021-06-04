<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'file'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
