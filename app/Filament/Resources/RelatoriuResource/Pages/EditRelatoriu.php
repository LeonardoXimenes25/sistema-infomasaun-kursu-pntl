<?php

namespace App\Filament\Resources\RelatoriuResource\Pages;

use App\Filament\Resources\RelatoriuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRelatoriu extends EditRecord
{
    protected static string $resource = RelatoriuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
