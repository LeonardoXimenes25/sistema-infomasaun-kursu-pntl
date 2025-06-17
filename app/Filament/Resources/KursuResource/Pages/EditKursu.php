<?php

namespace App\Filament\Resources\KursuResource\Pages;

use App\Filament\Resources\KursuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKursu extends EditRecord
{
    protected static string $resource = KursuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
