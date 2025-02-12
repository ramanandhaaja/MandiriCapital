<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class HomeProfileCompany extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'home_profile_company';

    public array $translatable = [
        'title',
        'content',
    ];

    protected $fillable = [
        'company_name',
        'name',
        'title',
        'content',
        'published_date',
        'image_path',
        'company_image_path'
    ];

}
