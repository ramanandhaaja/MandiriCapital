<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class PortfolioCategory extends Model
{
    use HasFactory, HasTranslations;

    public array $translatable = [
        'name',
    ];

    protected $fillable = [
        'name',
        'slug',
    ];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }
}
