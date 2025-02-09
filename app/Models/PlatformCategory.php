<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlatformCategory extends Model
{
    protected $table = 'platform_categories';

    protected $fillable = [
        'name',
        'published_date',
        'order',
    ];

    protected $casts = [
        'published_date' => 'date'
    ];

    public function platform()
    {
        return $this->hasMany(Platform::class);
    }
}
