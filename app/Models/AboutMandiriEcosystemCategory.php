<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutMandiriEcosystemCategory extends Model
{
    protected $table = 'about_mandiri_ecosystem_categories';

    protected $fillable = [
        'name',
        'order',
    ];

    public function aboutMandiriEcosystem()
    {
        return $this->hasMany(AboutMandiriEcosystem::class);
    }
}
