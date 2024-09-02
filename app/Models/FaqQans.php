<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqQans extends Model
{
    use HasFactory;
    protected $fillable =[
        'faq_id',
        'question',
        'answer',
    ];

    public function faqQan()
    {
        return $this->belongsTo(Faq::class, 'faq_id');
    }
}
