<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class PortfolioFundingArticle extends Model
{

    use HasFactory, HasTranslations;

    protected $table = 'portfolio_funding_articles';

    public array $translatable = [
        'title',
        'content',
    ];

    protected $fillable = [
        'title',
        'content',
        'is_active',
    ];

    /**
     * Get the sub-articles associated with the main article.
     */
    public function subArticles(): HasMany
    {
        return $this->hasMany(PortfolioFundingArticleSub::class, 'article_id');
    }
}
