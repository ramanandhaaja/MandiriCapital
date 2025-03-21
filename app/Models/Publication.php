<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Publication extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    use HasTranslations;
    public array $translatable = [
        'title',
        'content',
    ];

    protected $fillable = [
        'title',
        'hide_title',
        'hide_category',
        'slug',
        'publication_category_id',
        'content',
        'published_date',
        'image_path',
    ];

    /**
     * Get the category that the publication belongs to.
     */
    public function category()
    {
        return $this->belongsTo(PublicationCategory::class, 'publication_category_id');
    }
}
