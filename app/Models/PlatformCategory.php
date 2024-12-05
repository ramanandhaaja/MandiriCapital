<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlatformCategory extends Model
{
    protected $fillable = ['name', 'slug'];

    public function platforms()
    {
        return $this->hasMany(Platform::class);
    }
}
