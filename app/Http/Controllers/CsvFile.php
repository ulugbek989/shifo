<?php

namespace App\Http\Controllers;

use App\Exports\CsvExport;
use Illuminate\Http\Request;
//use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel;


class CsvFile extends Controller
{
    public function csv_export($id)
    {
        return Excel::download(new CsvExport($id), 'bemor.xlsx');
    }
}
