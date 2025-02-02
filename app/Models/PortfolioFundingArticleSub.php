<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class PortfolioFundingArticleSub extends Model
{
    use HasFactory;

    protected $table = 'portfolio_funding_articles_sub';

    protected $fillable = [
        'article_id',
        'title',
        'content',
        'is_large',
        'image_path',
        'is_active',
        'order',
        'stage',
        'geography',
        'ticketsize',
    ];

    /**
     * Get the main article that owns the sub-article.
     */
    public function article(): BelongsTo
    {
        return $this->belongsTo(PortfolioFundingArticle::class, 'article_id');
    }
}
