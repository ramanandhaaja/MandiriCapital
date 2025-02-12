<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Translatable\HasTranslations;

class PlatformCategory extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'platform_categories';

    public array $translatable = [
        'name',
    ];

    protected $fillable = [
        'name',
        'published_date',
        'order',
    ];

    protected $casts = [
        'published_date' => 'date'
    ];

    public function platform()
    {
        return $this->hasMany(Platform::class);
    }
}
