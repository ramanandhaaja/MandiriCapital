<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class PlatformArticle extends Model
{
    use HasFactory;

    protected $table = 'platform_article';

    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'published_date',
    ];

    protected $casts = [
        'published_date' => 'date',
    ];

}
