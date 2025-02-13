<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutPrioritySector extends Model
{
    use HasFactory;
    use HasFactory, HasTranslations;

    protected $table = 'about_priority_sector';

    public array $translatable = [
        'main_title',
        'title',
    ];

    protected $fillable = [
        'main_title',
        'title',
        'slug',
        'published_date',
        'image_path'
    ];

    protected $casts = [
        'published_date' => 'date'
    ];

}
