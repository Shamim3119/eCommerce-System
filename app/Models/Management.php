<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    protected $fillable = [
        'name',
        'designation',
        'phone',
        'email',
        'description',
        'image',
        'sort_order',
        'linkedin',
        'facebook',
        'instagram',
        'youtube'
    ];
}