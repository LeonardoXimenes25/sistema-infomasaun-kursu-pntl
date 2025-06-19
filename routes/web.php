<?php

use App\Exports\KursuRaiLiurExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KursuExportController;
use App\Http\Controllers\KursuReportController;
use App\Http\Controllers\KursuRaiLiurExportController;
use App\Http\Controllers\KursuRaiLiurReportController;
use App\Http\Controllers\PartisipanteExportController;
use App\Http\Controllers\PartisipanteReportController;
use App\Http\Controllers\PartisipanteRaiLiurExportController;
use App\Http\Controllers\PartisipanteRaiLiurReportController;

Route::get('/', function () {
    return redirect(route('filament.admin.auth.login'));
});

//export pdf
Route::get('/reports/partisipante-rai-laran', [PartisipanteReportController::class, 'export'])
    ->name('partisipante.report');

Route::get('/reports/partisipante-rai-liur', [PartisipanteRaiLiurReportController::class, 'export'])
    ->name('partisipanterailiur.report');

Route::get('/reports/kursu-rai-laran', [KursuReportController::class, 'export'])
    ->name('kursu.report');

    Route::get('/reports/kursu-rai-liur', [KursuRaiLiurReportController::class, 'export'])
    ->name('kursurailiur.report');

//export excel
Route::get('/kursurailiur/export', [KursuRaiLiurExportController::class, 'export'])->name('kursurailiur.export');
Route::get('/kursu/export', [KursuExportController::class, 'export'])->name('kursu.export');
Route::get('/partisipante/export', [PartisipanteExportController::class, 'export'])->name('partisipante.export');
Route::get('/partisipanterailiur/export', [PartisipanteRaiLiurExportController::class, 'export'])->name('partisipanterailiur.export');