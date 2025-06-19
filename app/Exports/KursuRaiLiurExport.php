<?php

namespace App\Exports;

use App\Models\KursuRaiLiur;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class KursuRaiLiurExport implements FromView
{
    public function view(): View
    {
        $data = KursuRaiLiur::all();
        $monthYear = now()->locale('pt')->isoFormat('MMMM [Tinan] YYYY');

        return view('reports.excelkursurailiur', [
            'data' => $data,
            'monthYear' => $monthYear,
        ]);
    }
}
