<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutTeamCategory extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'about_team_categories';

    public array $translatable = [
        'name',
    ];

    protected $fillable = [
        'name',
        'order',
    ];


    public function aboutTeam()
    {
        return $this->hasMany(AboutTeam::class);
    }
}
