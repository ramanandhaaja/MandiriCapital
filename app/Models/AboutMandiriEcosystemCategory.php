<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutMandiriEcosystemCategory extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'about_mandiri_ecosystem_categories';

    public array $translatable = [
        'name',
    ];

    protected $fillable = [
        'name',
        'order',
    ];

    public function aboutMandiriEcosystem()
    {
        return $this->hasMany(AboutMandiriEcosystem::class);
    }
}
