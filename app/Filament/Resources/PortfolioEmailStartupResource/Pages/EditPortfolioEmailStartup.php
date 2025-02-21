<?php

namespace App\Filament\Resources\PortfolioEmailStartupResource\Pages;

use App\Filament\Resources\PortfolioEmailStartupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPortfolioEmailStartup extends EditRecord
{
    protected static string $resource = PortfolioEmailStartupResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
