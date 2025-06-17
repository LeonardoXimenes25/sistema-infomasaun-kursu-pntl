<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\KursuRaiLiur;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class KursuRaiLiurReportController extends Controller
{
     public function export()
    {
        $data = KursuRaiLiur::all();

         // Cek apakah ada data
        $first = $data->first();
        $monthYear = null;

        if ($first) {
            $monthYear = Carbon::parse($first->data_hahu)->translatedFormat('F Y');
        }

        $pdf = Pdf::loadView('reports.kursurailiur', compact('data','monthYear'))->setPaper('a4', 'landscape');

        return $pdf->download('relatoriu-kursu-rai-liur.pdf');
    }
}
