<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Translatable\HasTranslations;

class PlatformEmail extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'platform_email';


    public array $translatable = [
        'title',
        'subtitle',
        'program',
        'mandiri_ecosystem',
        'firstname',
        'lastname',
        'email',
        'phone',
        'company',
        'website_url',
        'business_sector',
        'upload',
        'instructions',
        'cancel',
        'submit',
    ];

    protected $fillable = [
        'title',
        'subtitle',
        'program',
        'mandiri_ecosystem',
        'firstname',
        'lastname',
        'email',
        'phone',
        'company',
        'website_url',
        'business_sector',
        'upload',
        'instructions',
        'cancel',
        'submit',

    ];


}
