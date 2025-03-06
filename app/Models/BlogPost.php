<?php

// app/Models/BlogPost.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Auth;
use Spatie\Translatable\HasTranslations;

class BlogPost extends Model
{
    use HasTranslations;
    public array $translatable = [
        'title',
        'content_heading',
        'content',
    ];

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'content_heading',
        'content',
        'is_content_justified',
        'media_url',
        'media_source_url',
        'front_image',
        'headline_image',
        'featured_image',
        'author_name',
        'author_title',
        'author_image',
        'published_at',
        'meta_title',
        'meta_description',
        'status',
        'blog_category_id'
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Add boot method to automatically set user_id
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            if (empty($post->user_id)) {
                $post->user_id = Auth::check() ? Auth::id() : 1; // Fallback to ID 1 if no user is authenticated
            }
        });
    }

    public function categories()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
