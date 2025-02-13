<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Translatable\HasTranslations;

class PlatformValueCreationXponent extends Model
{

    use HasFactory, HasTranslations;

    protected $table = 'platform_value_creation_xponent';

    public array $translatable = [
        'hero_text',
        'headline',
        'whyexponent_title',
        'whyexponent_subtitle',
        'insideexponent_title',
        'insideexponent_subtitle',
        'testimonialexponent_title',
        'testimonialexponent_subtitle',
        'footer_text',
    ];

    protected $fillable = [
        'hero_text',
        'hero_image',
        'hero_background',
        'headline',
        'counter1_title',
        'counter2_title',
        'counter3_title',
        'counter1_value',
        'counter2_value',
        'counter3_value',

        'whyexponent_title',
        'whyexponent_subtitle',

        'insideexponent_title',
        'insideexponent_subtitle',


        'image_path1',
        'image_path2',
        'image_path3',
        'image_path4',
        'image_path5',

        'testimonialexponent_title',
        'testimonialexponent_subtitle',

        'footer_text',

        'published_date'
    ];

    protected $casts = [
        'published_date' => 'date'
    ];
}
