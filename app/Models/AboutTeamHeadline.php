<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutTeamHeadline extends Model
{
    protected $table = 'about_team_headlines';

    protected $fillable = [
        'title',
        'content',
    ];
}
