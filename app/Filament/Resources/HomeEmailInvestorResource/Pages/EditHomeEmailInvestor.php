<?php

namespace App\Filament\Resources\HomeEmailInvestorResource\Pages;

use App\Filament\Resources\HomeEmailInvestorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeEmailInvestor extends EditRecord
{
    protected static string $resource = HomeEmailInvestorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
