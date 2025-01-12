<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPrioritySector extends Model
{
    use HasFactory;

    protected $table = 'about_priority_sector';

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
