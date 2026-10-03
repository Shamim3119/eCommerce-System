<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    protected $fillable = [
            'company_name',
            'tagline',

            'logo',
            'favicon',

            'email',
            'phone',

            'address',
            'business_type',
            'motto',

            'facebook',
            'linkedin',
            'instagram',
            'youtube',
            'location',
            'copyright',
        ];
}
