<?php

namespace App\Filament\Resources\ContactEmailResource\Pages;

use App\Filament\Resources\ContactEmailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactEmail extends EditRecord
{
    protected static string $resource = ContactEmailResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
