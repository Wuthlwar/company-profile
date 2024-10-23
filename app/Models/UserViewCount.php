<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserViewCount extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'vacant_id',
        'view_count',
    ];
}
