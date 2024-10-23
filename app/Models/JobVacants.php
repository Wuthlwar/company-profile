<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobVacants extends Model
{
    use HasFactory;
    protected $fillable =[
        'vacant_name',
        'industry',
        'emptype',
        'no_vacant',
        'qualification',
        'experience',
        'gender',

        'category_id',
        'job_role',
        'vacant_description',
        'vacant_spec',
        'region',
        'township',
        'address',

        'salary',
        'currency',
        'min',
        'max',
        'offer',
        'q1',
        'q2',
        'q3',
        'vacant_banner',
        'vacant_image',
        'date',
        'status',
        'status1',
        'remark',
        'view_count'
    ];





    public function category()
    {
        return $this->belongsTo(JobCategory::class,'category_id')->withDefault();
    }

    public function branch()
    {
        return $this->belongsTo(VacantBranch::class,'vacant_id')->withDefault();
    }

    public function job_roleget()
    {
        return $this->belongsTo(Jobroles::class,'job_role')->withDefault();
    }

    public function vacant_branches()
    {
        return $this->hasMany(VacantBranch::class,'vacant_id','id');
    }

    public function branches()
{
    return $this->hasMany(VacantBranch::class, 'vacant_id');
}


}
