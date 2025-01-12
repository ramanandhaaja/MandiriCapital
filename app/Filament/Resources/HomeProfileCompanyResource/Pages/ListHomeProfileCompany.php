<?php

namespace App\Filament\Resources\HomeProfileCompanyResource\Pages;

use App\Filament\Resources\HomeProfileCompanyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeProfileCompany extends ListRecords
{
    protected static string $resource = HomeProfileCompanyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
