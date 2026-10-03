<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CelebrityType extends Model
{
    protected $fillable = [
        'name',
    ];

    public function celebrities()
    {
        return $this->hasMany(Celebrity::class);
    }
}