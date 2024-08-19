<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplicationForm extends Model
{
    use HasFactory;
    protected $fillable =[
        'jobvacant_id',
        'cat_id',
        'position',
        'title',
        'surname',
        'phone',
        'email',
        'current_address',
        'emergency_address',
        'career_summary',
        'resume',
        'agree',
        'status',
        'remark',
        'salary',

        'q1',
        'ans1',

        'q2',
        'ans2',

        'q3',
        'ans3',

        'date',

    ];

    public function category()
    {
        return $this->belongsTo(JobCategory::class,'cat_id')->withDefault();
    }
    public function jobvacant(){
        return $this->belongsTo(VacantBranchUser::class,'vacant_id')->withDefault();
    }
}
