<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Translatable\HasTranslations;

class PortfolioEmailInvestor extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'portfolio_email_investor';


    public array $translatable = [
        'title',
        'subtitle',
        'fullname',
        'subject',
        'email',
        'phone',
        'company',
        'message',
        'cancel',
        'submit',
    ];

    protected $fillable = [
        'title',
        'subtitle',
        'fullname',
        'subject',
        'email',
        'phone',
        'company',
        'message',
        'upload',
        'cancel',
        'submit',

    ];


}
