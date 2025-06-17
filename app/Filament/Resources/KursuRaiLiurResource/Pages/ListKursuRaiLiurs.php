<?php

namespace App\Filament\Resources\KursuRaiLiurResource\Pages;

use App\Filament\Resources\KursuRaiLiurResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKursuRaiLiurs extends ListRecords
{
    protected static string $resource = KursuRaiLiurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
