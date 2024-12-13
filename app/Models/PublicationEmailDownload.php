<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicationEmailDownload extends Model
{
    protected $table = 'publication_email_download';

    protected $fillable = [
        'name',
        'company_name',
        'email'
    ];
}
