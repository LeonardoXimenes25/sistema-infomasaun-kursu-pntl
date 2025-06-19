<?php

namespace App\Exports;

use App\Models\PartisipanteRaiLiur;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PartisipanteRaiLiurExport implements FromView
{
    public function view(): View
    {
        $data = PartisipanteRaiLiur::all();
        $monthYear = now()->locale('pt')->isoFormat('MMMM [Tinan] YYYY');

        return view('reports.excelpartisipanterailiur', [
            'data' => $data,
            'monthYear' => $monthYear,
        ]);
    }
}
