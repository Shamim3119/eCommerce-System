<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title',
        'image',
        'content',
        'sort_order',   
        'our_history',   
        'our_mission',   
        'our_vision',   
    ];
}