<?php

namespace App\Exports;

use App\Models\partisipante;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PartisipanteExport implements FromView
{
    public function view(): View
    {
        $data = partisipante::all();
        $monthYear = now()->locale('pt')->isoFormat('MMMM [Tinan] YYYY');

        return view('reports.excelpartisipante', [
            'data' => $data,
            'monthYear' => $monthYear,
        ]);
    }
}
