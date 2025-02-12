<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class HeroSection extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'hero_section';

    public array $translatable = [
        'title',
        'content',
    ];

    protected $fillable = [
        'title',
        'slug',
        'hero_section_category_id',
        'content',
        'published_date',
        'image_path'
    ];

    public function category()
    {
        return $this->belongsTo(HeroSectionCategory::class, 'hero_section_category_id');
    }
}
