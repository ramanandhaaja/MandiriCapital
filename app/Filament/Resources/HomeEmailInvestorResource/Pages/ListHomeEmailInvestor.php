<?php

namespace App\Filament\Resources\HomeEmailInvestorResource\Pages;

use App\Filament\Resources\HomeEmailInvestorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeEmailInvestor extends ListRecords
{
    protected static string $resource = HomeEmailInvestorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
