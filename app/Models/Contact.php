<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class Contact extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'contact';

    public array $translatable = [
        'contact_title',
        'map_title',
        'email_contact_title',
        'email_customer_report_title',
        'email_customer_report_tooltip',
        'phone_title',
        'social_media_title',

    ];

    protected $fillable = [
        'contact_title',
        'map_title',
        'email_form',
        'email_contact_title',
        'email_contact',
        'email_customer_report_title',
        'email_customer_report_tooltip',
        'email_customer_report',
        'phone_title',
        'phone',
        'social_media_title',
        'address',
    ];
}
