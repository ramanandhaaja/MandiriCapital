<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class PortfolioFundingArticleSub extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'portfolio_funding_articles_sub';

    public array $translatable = [
        'title',
        'about_title',
        'about_content_front',
        'about_content',
        'investment_thesis_title',
        'investment_thesis_content',
        'investor_title',
        'investment_criteria_title',
        'headline_title',
        'stage',
        'geography',
        'ticketsize',

    ];

    protected $fillable = [
        'article_id',
        'title',
        'about_title',
        'about_content_front',
        'about_content',
        'investment_thesis_title',
        'investment_thesis_content',
        'investor_title',
        'investor1_url',
        'investor2_url',
        'investor3_url',
        'investor4_url',
        'investor5_url',
        'investor6_url',
        'investment_criteria_title',
        'stage',
        'geography',
        'ticketsize',
        'is_large',
        'headline_title',
        'headline_url',
        'image_path',
        'is_active',
        'order',

    ];

    /**
     * Get the main article that owns the sub-article.
     */
    public function article(): BelongsTo
    {
        return $this->belongsTo(PortfolioFundingArticle::class, 'article_id');
    }
}
