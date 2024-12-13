<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PublicationEmailRegistered extends Model
{
    use HasFactory;

    protected $table = 'publication_email_registered';
    
    protected $fillable = [
        'name',
        'company_name',
        'email',
    ];
}
