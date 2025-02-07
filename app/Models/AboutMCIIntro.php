<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMCIIntro extends Model
{
    use HasFactory;

    protected $table = 'about_mci_intro';

    protected $fillable = [
        'id',
        'intro',
        'headline',
        'articletitle1',
        'articletitle2',
        'articletitle3',
        'article1',
        'article2',
        'article3',
        'icon_article1',
        'icon_article2',
        'icon_article3',
    ];


}
