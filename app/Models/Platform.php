<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
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
