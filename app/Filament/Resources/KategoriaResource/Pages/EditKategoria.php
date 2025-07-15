<?php

namespace App\Filament\Resources\KategoriaResource\Pages;

use App\Filament\Resources\KategoriaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoria extends EditRecord
{
    protected static string $resource = KategoriaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
