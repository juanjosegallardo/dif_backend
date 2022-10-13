<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PersonasExport;

class ExcelController extends Controller
{
    public function exportarPersonas(){
        return Excel::download(new PersonasExport, 'personas.xlsx');
    }
}
