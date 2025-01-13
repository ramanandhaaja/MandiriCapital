<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class PortfolioFundingArticle extends Model
{

    use HasFactory;

    protected $table = 'portfolio_funding_articles';

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
