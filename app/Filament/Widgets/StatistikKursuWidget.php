<?php

namespace App\Filament\Widgets;

use App\Models\kursu;
use App\Models\KursuRaiLiur;
use App\Models\partisipante;
use App\Models\PartisipanteRaiLiur;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatistikKursuWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Partisipante', partisipante::count())
                ->description('Total Partisipante')
                ->color('success'),

            Stat::make('Rai Laran', kursu::count())
                ->description('Partisipante Rai Laran')
                ->color('info'),

            Stat::make('Rai Liur', PartisipanteRaiLiur::count())
                ->description('Partisipante Rai Liur')
                ->color('warning'),

            Stat::make('Kursu', Kursu::count())
                ->description('Total Kursu')
                ->color('primary'),
        ];
    }
}
