<?php

namespace App\Filament\Resources\KursuRaiLiurResource\Pages;

use App\Filament\Resources\KursuRaiLiurResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKursuRaiLiur extends CreateRecord
{
    protected static string $resource = KursuRaiLiurResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
