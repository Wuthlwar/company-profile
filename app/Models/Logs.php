<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'email',
        'ip',
        'form_name',
        'tracking',
        'date',
    ];
}
