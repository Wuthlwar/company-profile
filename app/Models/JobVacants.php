<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobVacants extends Model
{
    use HasFactory;
    protected $fillable =[
        'vacant_name',
        'category_id',
        'vacant_banner',
        'vacant_image',
        'vacant_description',
        'vacant_shortxt',
        'status',
        'date',
    ];


    public function category()
    {
        return $this->belongsTo(JobCategory::class,'category_id')->withDefault();
    }
}
