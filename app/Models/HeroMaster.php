<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class HeroMaster extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'hero_masters';

    public array $translatable = [
        'footer',
        'ojk'
    ];

    protected $fillable = [
        'footer',
        'instagram',
        'linkedin',
        'twitter',
        'ojk',
        'font_size',
    ];
}
