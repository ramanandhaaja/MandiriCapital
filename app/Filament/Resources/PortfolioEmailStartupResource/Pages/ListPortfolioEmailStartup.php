<?php

namespace App\Filament\Resources\PortfolioEmailStartupResource\Pages;

use App\Filament\Resources\PortfolioEmailStartupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPortfolioEmailStartup extends ListRecords
{
    protected static string $resource = PortfolioEmailStartupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
