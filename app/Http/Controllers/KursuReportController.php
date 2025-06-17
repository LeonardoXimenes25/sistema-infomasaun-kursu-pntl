<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\kursu;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class KursuReportController extends Controller
{
    public function export()
    {
        $data = kursu::all();

        $first = $data->first();
        $monthYear = null;

        if ($first) {
            $monthYear = Carbon::parse($first->data_hahu)->translatedFormat('F Y');
        }

        $pdf = Pdf::loadView('reports.kursu', compact('data','monthYear'))->setPaper('a4', 'landscape');

        return $pdf->download('relatoriu-kursu-rai-laran.pdf');
    }
}
