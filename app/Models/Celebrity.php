<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Celebrity extends Model
{
    protected $fillable = [
        'name',
        'designation',
        'phone',
        'email',
        'description',
        'sort_order',
        'celebrity_type_id',
        'image',
        'user_id',
    ];

    public function celebrityType()
    {
        return $this->belongsTo(CelebrityType::class);
    }
}