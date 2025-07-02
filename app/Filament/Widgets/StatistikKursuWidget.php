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
            Stat::make('Partisipante Rai Laran', partisipante::count())
                ->description('Total')
                ->color('success')
                ->icon('heroicon-o-users')
                ->chartColor('success')
                ->extraAttributes(
                    [
                        'style'=>'background-color: var(--color-success-50);',
                        'class'=>'dark:bg-green-900',
                    ]
                ),

            Stat::make('Kursu Rai Laran', kursu::count())
                ->description('Total')
                ->color('info'),
    
            Stat::make('Partisipante Rai Liur', PartisipanteRaiLiur::count())
                ->description('Total')
                ->icon('heroicon-o-users')
                ->color('warning'),

            Stat::make('Kursu Rai Liur', KursuRaiLiur::count())
                ->description('Total')
                ->color('primary'),
        ];
    }
}
