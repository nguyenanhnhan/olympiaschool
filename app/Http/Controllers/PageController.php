<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class PageController extends Controller
{
    public function select_school()
    {
        $addresses = Address::all();
        return view('be.pages.school_select', compact('addresses'));
    }
    
    public function school_selected(Request $rq)
    {
        $address = Address::find($rq->school);
        // dd($address);
        return view('be.pages.dashboard', compact('address'));
    }

    public function welcome_school($id)
    {
        $address = Address::find($id);
        return view('be.pages.school_select', compact('address'));
    }
}
