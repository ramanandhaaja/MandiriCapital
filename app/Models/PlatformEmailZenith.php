<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Translatable\HasTranslations;

class PlatformEmailZenith extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'platform_email_zenith';


    public array $translatable = [
        'title',
        'headline1',
        'email',
        'company',
        'website_url',
        'fullname',
        'linkedin',
        'whatsapp',
        'headline2',
        'which_zenith',
        'which_sector',
        'description',
        'revenue',
        'established',
        'employee',
        'is_indonesian',
        'cancel',
        'submit',
    ];

    protected $fillable = [
        'destination',
        'title',
        'headline1',
        'email',
        'company',
        'website_url',
        'fullname',
        'linkedin',
        'whatsapp',
        'headline2',
        'which_zenith',
        'which_sector',
        'description',
        'revenue',
        'established',
        'employee',
        'is_indonesian',
        'cancel',
        'submit',
    ];


}
