<?php

namespace App\Filament\Resources\KursuResource\Pages;

use App\Filament\Resources\KursuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKursu extends ListRecords
{
    protected static string $resource = KursuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Aumenta Dadus'),
        ];
    }
}
