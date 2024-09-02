<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KnowledgeSharing extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'media',
        'file',
        'link',
    ];
}
