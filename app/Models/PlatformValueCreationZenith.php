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
        'whyzenith_title1',
        'whyzenith_title2',
        'whyzenith_title3',
        'whyzenith_title4',
        'whyzenith_title5',
        'whyzenith_title6',
        'whyzenith_content1',
        'whyzenith_content2',
        'whyzenith_content3',
        'whyzenith_content4',
        'whyzenith_content5',
        'whyzenith_content6',
        'insidezenith_title',
        'insidezenith_subtitle',
        'insidezenith_title1',
        'insidezenith_title2',
        'insidezenith_title3',
        'insidezenith_content1',
        'insidezenith_content2',
        'insidezenith_content3',
        'deal_title',
        'testimonialzenith_title',
        'testimonialzenith_subtitle',
        'testimonialzenith_title1',
        'testimonialzenith_title2',
        'testimonialzenith_title3',
        'testimonialzenith_title4',
        'testimonialzenith_title5',
        'testimonialzenith_title6',
        'testimonialzenith_content1',
        'testimonialzenith_content2',
        'testimonialzenith_content3',
        'testimonialzenith_content4',
        'testimonialzenith_content5',
        'testimonialzenith_content6',
        'footer_text',
    ];

    protected $fillable = [
        'hero_text',
        'hero_image',
        'hero_background',
        'headline',

        'whyzenith_title',
        'whyzenith_subtitle',
        'whyzenith_icon1',
        'whyzenith_icon2',
        'whyzenith_icon3',
        'whyzenith_icon4',
        'whyzenith_icon5',
        'whyzenith_icon6',
        'whyzenith_title1',
        'whyzenith_title2',
        'whyzenith_title3',
        'whyzenith_title4',
        'whyzenith_title5',
        'whyzenith_title6',
        'whyzenith_content1',
        'whyzenith_content2',
        'whyzenith_content3',
        'whyzenith_content4',
        'whyzenith_content5',
        'whyzenith_content6',

        'insidezenith_title',
        'insidezenith_subtitle',
        'insidezenith_icon1',
        'insidezenith_icon2',
        'insidezenith_icon3',
        'insidezenith_title1',
        'insidezenith_title2',
        'insidezenith_title3',
        'insidezenith_content1',
        'insidezenith_content2',
        'insidezenith_content3',

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
        'testimonialzenith_logo1',
        'testimonialzenith_logo2',
        'testimonialzenith_logo3',
        'testimonialzenith_logo4',
        'testimonialzenith_logo5',
        'testimonialzenith_logo6',
        'testimonialzenith_founder1',
        'testimonialzenith_founder2',
        'testimonialzenith_founder3',
        'testimonialzenith_founder4',
        'testimonialzenith_founder5',
        'testimonialzenith_founder6',
        'testimonialzenith_title1',
        'testimonialzenith_title2',
        'testimonialzenith_title3',
        'testimonialzenith_title4',
        'testimonialzenith_title5',
        'testimonialzenith_title6',
        'testimonialzenith_content1',
        'testimonialzenith_content2',
        'testimonialzenith_content3',
        'testimonialzenith_content4',
        'testimonialzenith_content5',
        'testimonialzenith_content6',

        'footer_text',

        'published_date'
    ];

    protected $casts = [
        'published_date' => 'date'
    ];
}
