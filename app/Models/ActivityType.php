<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityType extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function activities()
    {
        return $this->hasMany(Activity::class,'activity_type_id','id');
    }
}
