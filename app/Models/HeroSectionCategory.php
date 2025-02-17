<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class HeroSectionCategory extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'hero_section_categories';

    public array $translatable = [
        'name',
    ];

    protected $fillable = [
        'name',
        'slug',
        'show_on_mainmenu',
        'route'
    ];

    public function heroSections()
    {
        return $this->hasMany(HeroSection::class);
    }

    public function subCategories()
    {
        return $this->hasMany(HeroSectionSubCategory::class);
    }

}
