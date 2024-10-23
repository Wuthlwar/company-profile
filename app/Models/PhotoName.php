<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoName extends Model
{
    use HasFactory;
    protected $fillable =[
        'name'
    ];

    public function photoGalleries()
    {
        return $this->hasMany(PhotoGallery::class, 'name_id');
    }
}
