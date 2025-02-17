<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Translatable\HasTranslations;

class CustomerCareHow extends Model
{

    use HasFactory, HasTranslations;

    protected $table = 'customer_care_how';

    public array $translatable = [
        'customer_care_title',
        'customer_care_title1',
        'customer_care_title2',
        'customer_care_title3',
        'customer_care_title4',
    ];


    protected $fillable = [
        'customer_care_title',
        'customer_care_icon1',
        'customer_care_icon2',
        'customer_care_icon3',
        'customer_care_icon4',
        'customer_care_title1',
        'customer_care_title2',
        'customer_care_title3',
        'customer_care_title4',
        'customer_care_content1',
        'customer_care_content2',
        'customer_care_content3',
        'customer_care_content4',
    ];

}
