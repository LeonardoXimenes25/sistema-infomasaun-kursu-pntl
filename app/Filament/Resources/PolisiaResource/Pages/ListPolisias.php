<?php

namespace App\Filament\Resources\PolisiaResource\Pages;

use App\Filament\Resources\PolisiaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPolisias extends ListRecords
{
    protected static string $resource = PolisiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
