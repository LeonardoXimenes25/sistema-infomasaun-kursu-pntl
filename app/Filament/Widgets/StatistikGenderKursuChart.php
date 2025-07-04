<?php

namespace App\Filament\Widgets;

use App\Models\kursu;
use Filament\Widgets\ChartWidget;

class StatistikGenderKursuChart extends ChartWidget
{
    protected static ?string $heading = 'Distribuisaun Kursu (Rai Laran)';

    // Lebar widget di dashboard
    protected int | string | array $columnSpan = 6;

    protected function getData(): array
    {
        $mane = kursu::sum('mane');
        $feto = kursu::sum('feto');

        return [
            'datasets' => [
                [
                    'data' => [$mane, $feto],
                    'backgroundColor' => ['#36A2EB', '#FF6384'],
                    'borderWidth' => 0,
                ],
            ],
            'labels' => [
                "Mane (Kursu)", 
                "Feto (Kursu)",
            ],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }

    protected function getOptions(): ?array
    {
        return [
            'maintainAspectRatio' => false,
            'plugins' => [
                'legend' => [
                    'display' => true,
                    'position' => 'bottom',
                ],
                'tooltip' => [
                    'enabled' => true,
                ],
                'title' => [
                    'display' => true,
                    'text' => 'Distribuisaun Kursu (Rai Laran)',
                    'font' => ['size' => 16],
                ],
                'datalabels' => [
                    'color' => '#ffffff',
                    'formatter' => fn ($value) => $value,
                    'font' => [
                        'size' => 14,
                        'weight' => 'bold',
                    ],
                ],
            ],
        ];
    }
}
