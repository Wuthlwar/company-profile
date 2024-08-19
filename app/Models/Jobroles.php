<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobroles extends Model
{
    use HasFactory;
    protected $fillable =[
        'category_id',
        'job_role',
    ];


    public function category()
    {
        return $this->belongsTo(JobCategory::class,'category_id')->withDefault();
    }
}
