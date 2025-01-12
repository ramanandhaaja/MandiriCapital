<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class HomeProfileCompany extends Model
{
    use HasFactory;

    protected $table = 'home_profile_company';

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
