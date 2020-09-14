<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\TeachersImport;
use App\Imports\SessionImport;
use App\Imports\DefaultScheduleImport;
use App\Exports\COTExport;
use App\Evaluation;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function importExportView()
    {
        return view('excel.excel');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new COTExport, 'cot.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function schedulesimport() 
    {
        Excel::import(new DefaultScheduleImport,request()->file('file'));
        
        return back();
    }
    
    public function sessionimport() 
    {
        Excel::import(new SessionImport,request()->file('file'));
        
        return back();
    }
}
