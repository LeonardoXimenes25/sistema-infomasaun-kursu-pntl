<?php

namespace App\Filament\Resources\TipuKursuResource\Pages;

use App\Filament\Resources\TipuKursuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTipuKursus extends ListRecords
{
    protected static string $resource = TipuKursuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
