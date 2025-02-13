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
        'whyexponent_title1',
        'whyexponent_title2',
        'whyexponent_title3',
        'whyexponent_title4',
        'whyexponent_title5',
        'whyexponent_title6',
        'whyexponent_content1',
        'whyexponent_content2',
        'whyexponent_content3',
        'whyexponent_content4',
        'whyexponent_content5',
        'whyexponent_content6',
        'insideexponent_title',
        'insideexponent_subtitle',
        'insideexponent_title1',
        'insideexponent_title2',
        'insideexponent_content1',
        'insideexponent_content2',
        'testimonialexponent_title',
        'testimonialexponent_subtitle',
        'testimonialexponent_title1',
        'testimonialexponent_title2',
        'testimonialexponent_title3',
        'testimonialexponent_content1',
        'testimonialexponent_content2',
        'testimonialexponent_content3',
        
        'counter1_title',
        'counter2_title',
        'counter3_title',
        'counter1_value',
        'counter2_value',
        'counter3_value',
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

        'whyexponent_icon1',
        'whyexponent_icon2',
        'whyexponent_icon3',
        'whyexponent_icon4',
        'whyexponent_icon5',
        'whyexponent_icon6',
        'whyexponent_title1',
        'whyexponent_title2',
        'whyexponent_title3',
        'whyexponent_title4',
        'whyexponent_title5',
        'whyexponent_title6',
        'whyexponent_content1',
        'whyexponent_content2',
        'whyexponent_content3',
        'whyexponent_content4',
        'whyexponent_content5',
        'whyexponent_content6',

        'insideexponent_title',
        'insideexponent_subtitle',
        'insideexponent_icon1',
        'insideexponent_icon2',
        'insideexponent_title1',
        'insideexponent_title2',
        'insideexponent_content1',
        'insideexponent_content2',


        'image_path1',
        'image_path2',
        'image_path3',
        'image_path4',
        'image_path5',

        'testimonialexponent_title',
        'testimonialexponent_subtitle',
        'testimonialexponent_logo1',
        'testimonialexponent_logo2',
        'testimonialexponent_logo3',
        'testimonialexponent_founder1',
        'testimonialexponent_founder2',
        'testimonialexponent_founder3',
        'testimonialexponent_title1',
        'testimonialexponent_title2',
        'testimonialexponent_title3',
        'testimonialexponent_content1',
        'testimonialexponent_content2',
        'testimonialexponent_content3',

        'footer_text',

        'published_date'
    ];

    protected $casts = [
        'published_date' => 'date'
    ];
}
