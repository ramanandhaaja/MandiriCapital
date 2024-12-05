<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'platform_category_id',
        'content',
        'published_date',
        'image_path'
    ];

    protected $casts = [
        'published_date' => 'date'
    ];

    public function category()
    {
        return $this->belongsTo(PlatformCategory::class, 'platform_category_id');
    }
}
