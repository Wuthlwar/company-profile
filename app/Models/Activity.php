<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable=['title','title_mm','description','description_mm','preview_img','activity_type_id','location','location_mm','date'];

    public function act_types()
    {
        return $this->belongsTo(ActivityType::class,'activity_type_id')->withDefault();
    }
    public function act_imgs()
    {
        return $this->hasMany(ActivityImage::class,'activity_id');
    }
}
