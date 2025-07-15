<?php

namespace App\Filament\Resources\FatinKursuResource\Pages;

use App\Filament\Resources\FatinKursuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFatinKursus extends ListRecords
{
    protected static string $resource = FatinKursuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
