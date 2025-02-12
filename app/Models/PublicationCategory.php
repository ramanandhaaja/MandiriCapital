<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PublicationCategory extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = [
        'name'
    ];

    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Get the publications for the category.
     */
    public function publications()
    {
        return $this->hasMany(Publication::class);
    }
}
