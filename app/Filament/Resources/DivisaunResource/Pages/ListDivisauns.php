<?php

namespace App\Filament\Resources\DivisaunResource\Pages;

use App\Filament\Resources\DivisaunResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDivisauns extends ListRecords
{
    protected static string $resource = DivisaunResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
