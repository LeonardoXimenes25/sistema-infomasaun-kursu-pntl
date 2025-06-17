<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KursuReportController;
use App\Http\Controllers\KursuRaiLiurReportController;
use App\Http\Controllers\PartisipanteReportController;
use App\Http\Controllers\PartisipanteRaiLiurReportController;

Route::get('/', function () {
    return redirect(route('filament.admin.auth.login'));
});

Route::get('/reports/partisipante-rai-laran', [PartisipanteReportController::class, 'export'])
    ->name('partisipante.report');

Route::get('/reports/partisipante-rai-liur', [PartisipanteRaiLiurReportController::class, 'export'])
    ->name('partisipanterailiur.report');

Route::get('/reports/kursu-rai-laran', [KursuReportController::class, 'export'])
    ->name('kursu.report');

    Route::get('/reports/kursu-rai-liur', [KursuRaiLiurReportController::class, 'export'])
    ->name('kursurailiur.report');