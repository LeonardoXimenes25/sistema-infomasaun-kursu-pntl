<?php

namespace App\Filament\Resources\PartisipanteResource\Pages;

use App\Filament\Resources\PartisipanteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartisipante extends EditRecord
{
    protected static string $resource = PartisipanteResource::class;

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
