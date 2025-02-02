<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutTeam extends Model
{
    use HasFactory;

    protected $table = 'about_team';

    protected $fillable = [
        'name',
        'title',
        'job_group',
        'content',
        'published_date',
        'image_path',
    ];

    protected $casts = [
        'published_date' => 'date'
    ];

}
