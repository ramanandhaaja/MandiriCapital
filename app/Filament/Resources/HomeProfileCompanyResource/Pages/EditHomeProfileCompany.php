<?php

namespace App\Filament\Resources\HomeProfileCompanyResource\Pages;

use App\Filament\Resources\HomeProfileCompanyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeProfileCompany extends EditRecord
{
    protected static string $resource = HomeProfileCompanyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
