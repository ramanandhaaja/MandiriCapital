<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlatformValueCreation extends Model
{

    protected $table = 'platform_value_creation';

    protected $fillable = [
        'title',
        'slug',
        'content_frontpage',
        'content_sub_frontpage',
        'logo',
        'image_path_frontpage',
        'is_active',
        'published_date'
    ];

    protected $casts = [
        'published_date' => 'date'
    ];
}
