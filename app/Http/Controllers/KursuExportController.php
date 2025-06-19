<?php

namespace App\Http\Controllers;

use App\Exports\KursuExport;
use Maatwebsite\Excel\Facades\Excel;

class KursuExportController extends Controller
{
    public function export()
    {
        $fileName = 'relatoriu_kursu_rai_laran.xlsx';
        return Excel::download(new KursuExport, $fileName);
    }
}
