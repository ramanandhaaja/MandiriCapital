<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class PortfolioArticleSub extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'portfolio_articles_sub';

    public array $translatable = [
        'title',
        'content',
    ];


    protected $fillable = [
        'article_id',
        'title',
        'content',
        'icon',
        'text_icon',
        'is_active',
        'order',
    ];

    /**
     * Get the main article that owns the sub-article.
     */
    public function article(): BelongsTo
    {
        return $this->belongsTo(PortfolioArticle::class, 'article_id');
    }
}
