<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'content',
    ];

    public function faqQans()
    {
        return $this->hasMany(FaqQans::class);
    }
}
