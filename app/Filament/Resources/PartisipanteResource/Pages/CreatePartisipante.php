<?php

namespace App\Filament\Resources\PartisipanteResource\Pages;

use App\Filament\Resources\PartisipanteResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePartisipante extends CreateRecord
{
    protected static string $resource = PartisipanteResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
