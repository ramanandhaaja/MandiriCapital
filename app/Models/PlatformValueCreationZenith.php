<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Translatable\HasTranslations;

class PlatformValueCreationZenith extends Model
{

    use HasFactory, HasTranslations;

    protected $table = 'platform_value_creation_zenith';

    public array $translatable = [
        'hero_text',
        'headline',
        'whyzenith_title',
        'whyzenith_subtitle',
        'insidezenith_title',
        'insidezenith_subtitle',
        'deal_title',
        'testimonialzenith_title',
        'testimonialzenith_subtitle',
        'footer_text',
    ];

    protected $fillable = [
        'hero_text',
        'hero_image',
        'hero_background',
        'headline',

        'whyzenith_title',
        'whyzenith_subtitle',

        'insidezenith_title',
        'insidezenith_subtitle',

        'deal_title',
        'deal_image_path1',
        'deal_image_path2',
        'deal_image_path3',
        'deal_image_path4',
        'deal_image_path5',
        'deal_image_path6',

        'image_path1',
        'image_path2',
        'image_path3',
        'image_path4',
        'image_path5',

        'testimonialzenith_title',
        'testimonialzenith_subtitle',

        'footer_text',

        'published_date'
    ];

    protected $casts = [
        'published_date' => 'date'
    ];
}
