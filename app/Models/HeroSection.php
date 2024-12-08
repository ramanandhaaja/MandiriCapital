<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HeroSection extends Model
{
    use HasFactory;

    protected $table = 'hero_section';

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
