<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMandiriEcosystem extends Model
{
    use HasFactory;

    protected $table = 'about_mandiri_ecosystem';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'published_date',
        'image_path',
        'is_domestic',
        'is_international',
        'hover_focus_area',
        'hover_content',
    ];

    protected $casts = [
        'published_date' => 'date'
    ];

}
