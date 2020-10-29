<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\TeachersImport;
use App\Imports\SessionImport;
use App\Imports\UserImport;
use App\Imports\SubjectsImport;
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
    
    public function export_cot()
    {
        return view('excel.export_cot');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export(Request $rq) 
    {
        // dd($rq->all() ) ;
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
    
    public function userimport() 
    {
        // dd(request()->file('file'));
        Excel::import(new UserImport,request()->file('file'));
        
        return back();
    }
    
    public function subjectimport() 
    {
        // dd(request()->file('file'));
        Excel::import(new SubjectsImport,request()->file('file'));
        
        return back();
    }
    public function teacherimport() 
    {
        // dd(request()->file('file'));
        Excel::import(new TeachersImport,request()->file('file'));
        
        return back();
    }
}
