<?php

namespace App\Http\Controllers;

use App\DefaultSchedule;
use App\Day;
use App\Address;
use App\Teacher;
use App\Session;
use App\Schedule;
use Illuminate\Http\Request;

class DefaultScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $df_schedules = DefaultSchedule::all();
        return view('be/default_schedules/list', compact('df_schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $days = Day::all();
        $sessions = Session::all();
        $addresses = Address::all();
        $teachers = Teacher::all();
        return view('be/default_schedules/add', compact('days', 'sessions', 'teachers', 'addresses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $rq)
    {
        $fbs = new DefaultSchedule();
        $fbs->day_id = $rq->day_id;
        $fbs->session_id = $rq->session_id;
        $fbs->address_id = $rq->address_id;
        $fbs->teacher_id = $rq->teacher_id;
        // $all = $rq->all();
        // dd($fbs);
        $fbs->save();
        return redirect()->route('default_schedule_show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DefaultSchedule  $defaultSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(DefaultSchedule $defaultSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DefaultSchedule  $defaultSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(DefaultSchedule $defaultSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DefaultSchedule  $defaultSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DefaultSchedule $defaultSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DefaultSchedule  $defaultSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(DefaultSchedule $defaultSchedule)
    {
        //
    }

    public function default_booking()
    {
        
        $addresses = Address::all();
        $teachers = Teacher::all();
        $days = Day::all();
        $defaultschedule = DefaultSchedule::all();
        return view('be/default_schedules/booking', compact('addresses', 'days', 'teachers', 'defaultschedule'));
    }
    
    public function school_booking($id)
    {
        
        $addresses = Address::all();
        $teachers = Teacher::all();
        $days = Day::all();
        $defaultschedule = DefaultSchedule::where('address_id', $id)->get();
        // dd($defaultschedule);
        return view('be/default_schedules/booking', compact('addresses', 'days', 'teachers', 'defaultschedule'));
    }

    public function default_result_booking(Request $rq)
    {
        $addresses = Address::all();
        $teachers = Teacher::all();
        $days = Day::all();
        $address = $rq->location;
        $teacher = $rq->teacher;
        $day = $rq->day_id;
        $booking = DefaultSchedule::where('teacher_id', $teacher)->where('day_id', $day)->get();
        // $data['booking'] = $booking;
        // dd($booking);
        return view('be/default_schedules/booking', compact('booking', 'days', 'addresses', 'teachers'));
    }
    


    public function get_teacher($id_location)
    {
        $teachers = Teacher::where('id_address', $id_location)->get();
        // dd($teachers);
        foreach ($teachers as $teacher) {
            echo 
            "<option value='".$teacher->id."'> ".$teacher->fullname." </option>";
        }
    }
}
