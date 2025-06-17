<?php

namespace App\Filament\Resources\KursuResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Auth;
use App\Filament\Resources\KursuResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKursu extends CreateRecord
{
    protected static string $resource = KursuResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
