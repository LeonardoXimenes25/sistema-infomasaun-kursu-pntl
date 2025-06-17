<?php

namespace App\Http\Controllers;

use App\Models\partisipante;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PartisipanteReportController extends Controller
{
    public function export()
    {
        $data = partisipante::all();

        $pdf = Pdf::loadView('reports.partisipante', compact('data'));

        return $pdf->download('laporan-partisipante.pdf');
    }
}
