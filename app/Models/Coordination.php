<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class Coordination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'active',
        'slug',
        'logo'
    ];

    public function unity()
    {
        return $this->belongsTo(Unity::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

}
