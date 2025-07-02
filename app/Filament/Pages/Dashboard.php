<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\DualGenderChart;
use App\Filament\Widgets\StatistikKursuWidget;
use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\StatistikGenderKursuChart;
use App\Filament\Widgets\StatistikGenderKursuRaiLiurChart;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = null;

    // Widget kecil (header): tampil di atas seperti ringkasan
    public function getHeaderWidgets(): array
    {
        return [
            StatistikKursuWidget::class,
        ];
    }

    // Widget utama: tampil di bagian utama halaman dashboard
    public function getWidgets(): array
    {
        return [
           StatistikGenderKursuChart::class,
           StatistikGenderKursuRaiLiurChart::class,
        ];
    }
    
    
}
