<?php

namespace App\Filament\Resources\FundusResource\Pages;

use App\Filament\Resources\FundusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFundus extends EditRecord
{
    protected static string $resource = FundusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
