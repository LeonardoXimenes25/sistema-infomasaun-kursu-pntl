<?php

namespace App\Providers;

use Filament\Facades\Filament;
use App\Filament\Pages\Dashboard;
use Illuminate\Support\ServiceProvider;
use App\Filament\Resources\KursuResource;
use App\Filament\Resources\KursuRaiLiurResource;
use App\Filament\Resources\PartisipanteResource;
use App\Filament\Resources\PartisipanteRaiLiurResource;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Filament::serving(function () {
            Filament::registerPages([
                // Dashboard::class,
            ]);

            Filament::registerResources([
                PartisipanteResource::class,
                KursuResource::class,
                PartisipanteRaiLiurResource::class,
                KursuRaiLiurResource::class,
            ]);

            // Filament::defaultRoute(fn ()=> route('filament.pages.dashboard'));
        });
    }
}
