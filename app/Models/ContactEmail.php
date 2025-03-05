<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Translatable\HasTranslations;

class ContactEmail extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'contact_email';


    public array $translatable = [
        'title',
        'position1',
        'position2',
        'position3',
        'name',
        'email',
        'subject',
        'startup_category',
        'company',
        'problem',
        'solution',
        'proposition',
        'upload',
        'instructions',
        'message',
        'cancel',
        'submit',
    ];

    protected $fillable = [
        'destination',
        'title',
        'position1',
        'position2',
        'position3',
        'name',
        'email',
        'subject',
        'startup_category',
        'company',
        'problem',
        'solution',
        'proposition',
        'upload',
        'instructions',
        'message',
        'cancel',
        'submit',

    ];


}
