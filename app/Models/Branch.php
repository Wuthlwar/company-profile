<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable =['branch_code','branch_short_name','branch_name_eng','branch_name','branch_address','region_id'];


    public function region()
    {
        return $this->belongsTo(Region::class);
    }

}
