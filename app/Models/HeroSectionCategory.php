<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HeroSectionCategory extends Model
{
    use HasFactory;

    protected $table = 'hero_section_categories';

    protected $fillable = [
        'name',
        'slug'
    ];

    public function heroSections()
    {
        return $this->hasMany(HeroSection::class);
    }

    public function isEmailVerificationRequired(): bool
    {
        return false;
    }
}
