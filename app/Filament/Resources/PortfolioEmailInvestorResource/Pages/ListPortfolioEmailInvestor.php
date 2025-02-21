<?php

namespace App\Filament\Resources\PortfolioEmailInvestorResource\Pages;

use App\Filament\Resources\PortfolioEmailInvestorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPortfolioEmailInvestor extends ListRecords
{
    protected static string $resource = PortfolioEmailInvestorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
