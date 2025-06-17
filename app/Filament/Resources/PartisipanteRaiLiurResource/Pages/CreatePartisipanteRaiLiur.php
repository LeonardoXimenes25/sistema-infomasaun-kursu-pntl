<?php

namespace App\Filament\Resources\PartisipanteRaiLiurResource\Pages;

use App\Filament\Resources\PartisipanteRaiLiurResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePartisipanteRaiLiur extends CreateRecord
{
    protected static string $resource = PartisipanteRaiLiurResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
