<?php

namespace App\Exports;

use App\Models\Kursu;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class KursuExport implements FromView
{
    public function view(): View
    {
        $data = Kursu::all();
        $monthYear = now()->locale('pt')->isoFormat('MMMM [Tinan] YYYY');

        return view('reports.excelkursu', [
            'data' => $data,
            'monthYear' => $monthYear,
        ]);
    }
}
