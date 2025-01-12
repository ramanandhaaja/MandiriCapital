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
        'is_international'
    ];

    protected $casts = [
        'published_date' => 'date'
    ];

}
