<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Translatable\HasTranslations;

class PlatformCounter extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'platform_counter';

    public array $translatable = [
        'title',
        'subtitle',
        'content',
    ];

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
