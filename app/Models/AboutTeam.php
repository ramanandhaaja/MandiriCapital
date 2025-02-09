<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutTeam extends Model
{
    use HasFactory;

    protected $table = 'about_teams';

    protected $fillable = [
        'name',
        'title',
        'job_group',
        'content',
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
