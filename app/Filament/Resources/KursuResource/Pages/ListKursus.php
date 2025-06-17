<?php

namespace App\Filament\Resources\KursuResource\Pages;

use App\Filament\Resources\KursuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKursus extends ListRecords
{
    protected static string $resource = KursuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
