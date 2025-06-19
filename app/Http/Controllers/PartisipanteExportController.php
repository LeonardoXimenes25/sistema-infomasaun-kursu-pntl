<?php

namespace App\Http\Controllers;

use App\Exports\PartisipanteExport;
use Maatwebsite\Excel\Facades\Excel;

class PartisipanteExportController extends Controller
{
    public function export()
    {
        $fileName = 'relatoriu_partisipante_rai_laran.xlsx';
        return Excel::download(new PartisipanteExport, $fileName);
    }
}
