<?php

namespace App\Http\Controllers;

use App\Exports\PartisipanteRaiLiurExport;
use Maatwebsite\Excel\Facades\Excel;

class PartisipanteRaiLiurExportController extends Controller
{
    public function export()
    {
        $fileName = 'relatoriu_partisipante_rai_liur.xlsx';
        return Excel::download(new PartisipanteRaiLiurExport, $fileName);
    }
}
