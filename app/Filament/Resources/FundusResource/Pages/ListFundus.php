<?php

namespace App\Filament\Resources\FundusResource\Pages;

use App\Filament\Resources\FundusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFundus extends ListRecords
{
    protected static string $resource = FundusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
