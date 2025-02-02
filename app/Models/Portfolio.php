<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'portfolio_category_id',
        'description',
        'stage',
        'website_url',
        'image_path',
        'highlight_image',
        'icon',
        'ceo_name',
        'year_invested',
        'sector',
        'portfolio_category_id',
        'head_office',
        'instagram_url',
        'linkedin_url'
    ];

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class, 'portfolio_category_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($portfolio) {
            $portfolio->slug = Str::slug($portfolio->name);
        });
    }
}
