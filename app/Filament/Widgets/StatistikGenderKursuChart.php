<?php

namespace App\Filament\Widgets;

use App\Models\kursu;
use App\Models\KursuRaiLiur;
use Filament\Widgets\ChartWidget;

class StatistikGenderKursuChart extends ChartWidget
{
    protected static ?string $heading = 'Distribuisaun Partisipante';

    // widget hanya makan setengah kolom (12 kolom grid default)
    protected int | string | array $columnSpan = 6;

    protected function getData(): array
    {
        $maneKursu = kursu::sum('mane');
        $fetoKursu = kursu::sum('feto');
        $maneRaiLiur = KursuRaiLiur::sum('mane');
        $fetoRaiLiur = KursuRaiLiur::sum('feto');

        return [
            'datasets' => [
                [
                    'data' => [$maneKursu, $fetoKursu, $maneRaiLiur, $fetoRaiLiur],
                    'backgroundColor' => ['#36A2EB', '#FF6384', '#4BC0C0', '#FF9F40'],
                    'borderWidth' => 0,
                ],
            ],
            'labels' => [
                "Mane (Kursu)", 
                "Feto (Kursu)", 
                "Mane (Kursu Rai Liur)", 
                "Feto (Kursu Rai Liur)",
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
            'maintainAspectRatio' => false, // agar kita bisa set height bebas
            'height' => 250, // tinggi chart diatur 250px
            'plugins' => [
                'legend' => [
                    'display' => false, // hilangkan label bawah
                ],
                'tooltip' => [
                    'enabled' => false, // hilangkan hover tooltip
                ],
                'title' => [
                    'display' => true,
                    'text' => 'Distribuisaun Partisipante',
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
            'layout' => [
                'padding' => 0,
            ],
            'scales' => [
                'x' => ['display' => false],
                'y' => ['display' => false],
            ],
        ];
    }
}
