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
        return view('excel.exportcot', [
            'evaluations' => Evaluation::all()
        ]);
    }
}
