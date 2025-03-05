<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Translatable\HasTranslations;

class PublicationEmail extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'publication_email';


    public array $translatable = [
        'title',
        'name',
        'email',
        'company',
        'job',
        'cancel',
        'submit',
    ];

    protected $fillable = [
        'destination',
        'title',
        'name',
        'email',
        'company',
        'job',
        'cancel',
        'submit',
        'image_url',

    ];


}
