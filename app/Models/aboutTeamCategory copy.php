<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutTeamCategory extends Model
{
    protected $table = 'about_team_categories';

    protected $fillable = [
        'name',
        'order',
    ];


    public function aboutTeam()
    {
        return $this->hasMany(AboutTeam::class);
    }
}
