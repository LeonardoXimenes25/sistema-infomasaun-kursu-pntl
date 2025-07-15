<?php

namespace App\Providers;

use Filament\Facades\Filament;
use App\Filament\Pages\Dashboard;
use Illuminate\Support\ServiceProvider;
use App\Filament\Resources\KursuResource;

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
                KursuResource::class,
            ]);
        });
    }
}
