<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Translatable\HasTranslations;

class PrivacyPolicy extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'privacy_policies';

    public array $translatable = [
        'description',
    ];

    protected $fillable = [
        'description',
        'year',
        'file_url',
    ];

}
