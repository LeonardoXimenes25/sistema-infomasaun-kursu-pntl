<?php

namespace App\Filament\Resources\PartisipanteResource\Pages;

use App\Filament\Resources\PartisipanteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartisipantes extends ListRecords
{
    protected static string $resource = PartisipanteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Aumenta Dadus'),
        ];
    }
}
