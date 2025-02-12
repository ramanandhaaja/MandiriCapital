<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Translatable\HasTranslations;

class HomeArticle extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'home_article';


    public array $translatable = [
        'title',
        'content',
        'sub_content',
    ];

    protected $fillable = [
        'title',
        'content',
        'sub_content',
        'published_date',
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
