<?php

namespace App\Filament\Resources\HomeEmailStartupResource\Pages;

use App\Filament\Resources\HomeEmailStartupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeEmailStartup extends EditRecord
{
    protected static string $resource = HomeEmailStartupResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
