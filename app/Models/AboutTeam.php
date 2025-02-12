<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Spatie\Translatable\HasTranslations;

class AboutTeam extends Model
{
    use HasFactory;
    use HasFactory, HasTranslations;

    protected $table = 'about_teams';

    public array $translatable = [
        'title',
    ];

    protected $fillable = [
        'name',
        'title',
        'published_date',
        'image_path',
        'about_team_category_id'
    ];

    protected $casts = [
        'published_date' => 'date'
    ];

    public function category()
    {
        return $this->belongsTo(AboutTeamCategory::class, 'about_team_category_id');
    }

}
