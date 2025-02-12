<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class PortfolioArticle extends Model
{

    use HasFactory, HasTranslations;

    public array $translatable = [
        'title',
        'content',
        'title_sub',
        'content_sub'
    ];

    protected $table = 'portfolio_articles';

    protected $fillable = [
        'title',
        'content',
        'title_sub',
        'content_sub',
        'is_active',
    ];

    /**
     * Get the sub-articles associated with the main article.
     */
    public function subArticles(): HasMany
    {
        return $this->hasMany(PortfolioArticleSub::class, 'article_id');
    }
}
