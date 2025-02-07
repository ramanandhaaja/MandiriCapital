<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HeroSectionSubCategory extends Model
{
    use HasFactory;

    protected $table = 'hero_section_sub_categories';

    protected $fillable = [
        'name',
        'slug',
        'hero_section_category_id',
        'headline_text'
    ];

    public function category()
    {
        return $this->belongsTo(HeroSectionCategory::class, 'hero_section_category_id');
    }


}
