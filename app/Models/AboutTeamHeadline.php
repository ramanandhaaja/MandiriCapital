<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutTeamHeadline extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'about_team_headlines';

    public array $translatable = [
        'title',
        'content',
    ];

    protected $fillable = [
        'title',
        'content',
    ];
}
