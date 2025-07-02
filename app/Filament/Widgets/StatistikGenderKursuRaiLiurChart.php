<?php

namespace App\Filament\Widgets;

use App\Models\KursuRaiLiur;
use Filament\Widgets\ChartWidget;

class StatistikGenderKursuRaiLiurChart extends ChartWidget
{
    protected static ?string $heading = 'Distribuisaun Rai Liur';

    protected int | string | array $columnSpan = 6;

    protected function getData(): array
    {
        $mane = KursuRaiLiur::sum('mane');
        $feto = KursuRaiLiur::sum('feto');

        return [
            'datasets' => [
                [
                    'data' => [$mane, $feto],
                    'backgroundColor' => ['#4BC0C0', '#FF9F40'],
                    'borderWidth' => 0,
                ],
            ],
            'labels' => ['Mane', 'Feto'],
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
                'title' => [
                    'display' => true,
                    'text' => 'Kursu Rai Liur',
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
