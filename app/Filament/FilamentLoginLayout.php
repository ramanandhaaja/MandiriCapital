<?php

namespace App\Filament;

use Filament\Pages\Auth\Login;

class FilamentLoginLayout extends Login
{
    public function getMaxWidth(): \Filament\Support\Enums\MaxWidth|string|null
    {
        return '600px';
    }
}
