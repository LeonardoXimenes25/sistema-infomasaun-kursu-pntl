<?php

namespace App\Filament\Resources\PartisipanteRaiLiurResource\Pages;

use App\Filament\Resources\PartisipanteRaiLiurResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartisipanteRaiLiurs extends ListRecords
{
    protected static string $resource = PartisipanteRaiLiurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Aumenta Dadus'),
        ];
    }
}
