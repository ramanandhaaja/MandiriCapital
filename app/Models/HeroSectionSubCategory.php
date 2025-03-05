<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class HeroSectionSubCategory extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'hero_section_sub_categories';

    public array $translatable = [
        'name',
        'headline_text'
    ];

    protected $fillable = [
        'name',
        'slug',
        'hero_section_category_id',
        'headline_text',
        'active',
    ];

    public function category()
    {
        return $this->belongsTo(HeroSectionCategory::class, 'hero_section_category_id');
    }
}
