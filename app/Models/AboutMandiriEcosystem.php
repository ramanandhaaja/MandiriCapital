<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutMandiriEcosystem extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'about_mandiri_ecosystem';

    public array $translatable = [
        'title',
        'content',
        'hover_focus_area',
        'hover_content',
    ];

    protected $fillable = [
        'title',
        'slug',
        'content',
        'published_date',
        'image_path',
        'is_domestic',
        'is_international',
        'is_headline',
        'hover_focus_area',
        'hover_content',
        'about_ecosystem_category_id',
    ];

    protected $casts = [
        'published_date' => 'date'
    ];

    public function category()
    {
        return $this->belongsTo(AboutMandiriEcosystemCategory::class, 'about_ecosystem_category_id');
    }

}
