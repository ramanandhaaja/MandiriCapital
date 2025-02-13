<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Translatable\HasTranslations;

class PlatformValueCreationYaxis extends Model
{

    use HasFactory, HasTranslations;

    protected $table = 'platform_value_creation_yaxis';

    public array $translatable = [
        'hero_text',
        'headline',
        'footer_text',
    ];

    protected $fillable = [
        'hero_text',
        'hero_image',
        'headline',
        'footer_text',
        'image_path1',
        'image_path2',
        'image_path3',
        'image_path4',
        'image_path5',
        'published_date'
    ];

    protected $casts = [
        'published_date' => 'date'
    ];
}
