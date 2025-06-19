<?php

namespace App\Http\Controllers;

use App\Exports\KursuRaiLiurExport;
use Maatwebsite\Excel\Facades\Excel;

class KursuRaiLiurExportController extends Controller
{
    public function export()
    {
        $fileName = 'relatoriu_kursu_rai_liur.xlsx';
        return Excel::download(new KursuRaiLiurExport, $fileName);
    }
}
