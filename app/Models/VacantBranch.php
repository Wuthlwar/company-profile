<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacantBranch extends Model
{
    use HasFactory;
    protected $fillable =['branch_id','vacant_id'];

    public function branches()
    {
        return $this->belongsTo(Branch::class,'branch_id')->withDefault();
    }
}
