<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Translatable\HasTranslations;

class PlatformValueCreation extends Model
{

    use HasFactory, HasTranslations;

    protected $table = 'platform_value_creation';

    public array $translatable = [
        'content_frontpage',
        'content_sub_frontpage',
    ];

    protected $fillable = [
        'title',
        'slug',
        'content_frontpage',
        'content_sub_frontpage',
        'logo',
        'image_path_frontpage1',
        'image_path_frontpage2',
        'image_path_frontpage3',
        'is_active',
        'published_date'
    ];

    protected $casts = [
        'published_date' => 'date'
    ];
}
