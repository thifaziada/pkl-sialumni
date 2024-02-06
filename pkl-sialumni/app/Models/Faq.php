<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faqs';

    protected $primaryKey ='id';

    protected $fillable = [
        'question',
        'answer',
        'status'
    ];

    protected $atribbutes = [
        'status' => 'pending',
    ];
}
