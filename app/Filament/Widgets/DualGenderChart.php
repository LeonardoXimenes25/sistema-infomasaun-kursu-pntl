<?php

namespace App\Filament\Widgets;

use App\Models\kursu;
use App\Models\KursuRaiLiur;
use Filament\Widgets\Widget;

class DualGenderChart extends Widget
{
    protected static string $view = 'filament.widgets.dual-gender-chart';

    protected function getViewData(): array
    {
        return [
            'kursu' => [
                'mane' => kursu::sum('mane'),
                'feto' => kursu::sum('feto'),
            ],
            'railiur' => [
                'mane' => KursuRaiLiur::sum('mane'),
                'feto' => KursuRaiLiur::sum('feto'),
            ],
        ];
    }
}
