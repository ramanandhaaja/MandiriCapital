<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class HeroError extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'hero_error';

    public array $translatable = [
        'title',
        'subtitle',
    ];

    protected $fillable = [
        'title',
        'subtitle',
        'image_path',
    ];

}
