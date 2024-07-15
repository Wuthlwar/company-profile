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
        'date',
    ];

    public function category()
    {
        return $this->belongsTo(JobCategory::class,'cat_id')->withDefault();
    }
}
