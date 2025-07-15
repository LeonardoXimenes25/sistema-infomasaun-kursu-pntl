<?php

namespace App\Filament\Resources\DivisaunResource\Pages;

use App\Filament\Resources\DivisaunResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDivisaun extends EditRecord
{
    protected static string $resource = DivisaunResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
