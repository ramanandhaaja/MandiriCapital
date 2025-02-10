<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroMaster extends Model
{
    protected $table = 'hero_masters';

    protected $fillable = [
        'footer',
        'instagram',
        'linkedin',
        'twitter',
        'email_form',
        'email_contact',
        'email_customer_report',
        'phone',
        'address',
    ];
}
