<?php

namespace App\Filament\Resources\PortfolioEmailInvestorResource\Pages;

use App\Filament\Resources\PortfolioEmailInvestorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPortfolioEmailInvestor extends EditRecord
{
    protected static string $resource = PortfolioEmailInvestorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
