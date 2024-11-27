<?php

// app/Models/BlogPost.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Auth;

class BlogPost extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'published_at',
        'meta_title',
        'meta_description',
        'status',
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


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(BlogCategory::class, 'blog_post_categories');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(BlogTag::class, 'blog_post_tags');
    }
}
