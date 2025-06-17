<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\PartisipanteRaiLiur;

class PartisipanteRaiLiurReportController extends Controller
{
    public function export()
    {
        $data = PartisipanteRaiLiur::all();

        $pdf = Pdf::loadView('reports.partisipanterailiur', compact('data'));

        return $pdf->download('relatoriu-partisipante-rai-liur.pdf');
    }
}
