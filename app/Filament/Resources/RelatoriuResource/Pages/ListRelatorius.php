<?php

namespace App\Filament\Resources\RelatoriuResource\Pages;

use App\Filament\Resources\RelatoriuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRelatorius extends ListRecords
{
    protected static string $resource = RelatoriuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
