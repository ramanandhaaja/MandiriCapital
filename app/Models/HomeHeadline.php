<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Translatable\HasTranslations;

class HomeHeadline extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'home_headline';


    public array $translatable = [
        'title',
        'category',
    ];

    protected $fillable = [
        'title',
        'category',
        'logo_path',
        'image_path',
        'link_url',
        'type',
        'position',
        'published_date',
        'hide_category',
        'hide_title',
    ];

    protected $casts = [
        'published_date' => 'date',
        'hide_category' => 'boolean',
        'hide_title' => 'boolean',
    ];

}
