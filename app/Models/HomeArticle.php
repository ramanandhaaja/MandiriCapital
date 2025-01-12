<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class HomeArticle extends Model
{
    use HasFactory;

    protected $table = 'home_article';

    protected $fillable = [
        'category',
        'title',
        'slug',
        'content',
        'published_date',
        'image_path'
    ];

    protected $casts = [
        'published_date' => 'date',
    ];

    protected function content(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => strip_tags($value)
        );
    }
}
