<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'published_date',
        'image_path'
    ];

    protected $casts = [
        'published_date' => 'date'
    ];
}
