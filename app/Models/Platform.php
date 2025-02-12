<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Platform extends Model
{
    use HasFactory, HasTranslations;

    public array $translatable = [
        'title',
    ];

    protected $fillable = [
        'title',
        'slug',
        'published_date',
        'image_path',
        'platform_category_id'
    ];

    protected $casts = [
        'published_date' => 'date'
    ];

    public function category()
    {
        return $this->belongsTo(PlatformCategory::class, 'platform_category_id');
    }
}
