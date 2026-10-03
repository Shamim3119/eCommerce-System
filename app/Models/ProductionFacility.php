<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductionFacility extends Model
{
    protected $fillable = [
        'title',
        'description',
        'details',
        'sort_order',
        'images',
    ];

    protected $casts = [
        'images' => 'array', // <-- Add this to handle multiple files automatically
    ];
}
