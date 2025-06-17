<?php

namespace App\Filament\Resources\PartisipanteRaiLiurResource\Pages;

use App\Filament\Resources\PartisipanteRaiLiurResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartisipanteRaiLiur extends EditRecord
{
    protected static string $resource = PartisipanteRaiLiurResource::class;

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
