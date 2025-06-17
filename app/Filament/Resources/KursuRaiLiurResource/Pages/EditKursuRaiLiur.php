<?php

namespace App\Filament\Resources\KursuRaiLiurResource\Pages;

use App\Filament\Resources\KursuRaiLiurResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKursuRaiLiur extends EditRecord
{
    protected static string $resource = KursuRaiLiurResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
