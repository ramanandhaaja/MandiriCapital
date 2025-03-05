<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Translatable\HasTranslations;

class HomeEmailStartup extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'home_email_startup';


    public array $translatable = [
        'title',
        'subtitle',
        'firstname',
        'lastname',
        'email',
        'phone',
        'company',
        'website_url',
        'business_sector',
        'upload',
        'cancel',
        'submit',
    ];

    protected $fillable = [
        'destination',
        'title',
        'subtitle',
        'firstname',
        'lastname',
        'email',
        'phone',
        'company',
        'website_url',
        'business_sector',
        'upload',
        'cancel',
        'submit',

    ];


}
