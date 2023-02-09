<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable=['title','description','preview_img','activity_type_id','location','date'];

    public function act_types()
    {
        return $this->belongsTo(ActivityType::class,'activity_type_id')->withDefault();
    }
}
