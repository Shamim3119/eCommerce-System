<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $fillable = [
        'certification_no',
        'category',
        'issue_date',
        'valid_until',
        'image',
        'sort_order',
    ];

 
}