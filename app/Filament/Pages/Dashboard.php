<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\StatistikKursuWidget;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = null;

    public function getHeaderWidgets(): array
    {
        return[
            StatistikKursuWidget::class,
        ];
    }

    public function getWidgets(): array
    {
        return []; 
    }
}
