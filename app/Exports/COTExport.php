<?php

namespace App\Exports;

use App\Evaluation;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class COTExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Evaluation::all();
    // }
    public function view(): View
    {
        $date_start = date("Y-m-d H:i:s",strtotime(request()->input('start')));
        $date_end = date("Y-m-d 23:59:59",strtotime(request()->input('end')));
        // $evaluations = Evaluation::where('status', 1)->whereBetween('created_at', [ $date_start, $date_end ] )
        //     ->get();
        // dd($evaluations);
        return view('excel.exportcot', [
            // 'evaluations' => Evaluation::all();
            'evaluations' => Evaluation::where('status', 1)
            ->whereBetween('created_at', [ $date_start, $date_end ] )
            ->get()
            
        ]);
    }
}
