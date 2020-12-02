<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Session;
use App\Address;
use App\Teacher;
use App\Subject;
use App\Course;
use Illuminate\Http\Request;
use Auth;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::all();
        return view('be/schedules/list', ['schedules'=>$schedules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sessions = Session::all();
        $subjects = Subject::all();
        $teachers = Teacher::all();
        $courses = Course::all();
        return view('be/schedules/add', compact('sessions', 'teachers', 'subjects', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $rq)
    {
        $this->validate($rq,[
            'id_session' => 'required',
            'id_teacher' => 'required',
            'id_subject' => 'required',
        ],[
            'id_session.required' =>'please select session',
            'id_teacher.required' =>'please select teacher',
            'id_subject.required' =>'please select subject',
        ]);
        // try {
            $schedule = new Schedule();
            $schedule->id_session = $rq->id_session;
            $schedule->id_teacher = $rq->id_teacher;
            $schedule->id_subject = $rq->id_subject;
            $schedule->class = $rq->course;
            $schedule->time = $rq->time;
            $schedule->time1 = date('Y-m-d', strtotime($rq->time1));
            $schedule->author = Auth::user()->id;
            // dd($schedule);
            $schedule->save();
            return redirect()->route('waiting_list')->with('msg','update schedule success!');
        // } catch (\Exception  $ex) {
        //     return back()->withErrors($ex->getMessage());
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedule = Schedule::find($id);
        $sessions = Session::all();
        $subjects = Subject::all();
        $teachers = Teacher::all();
        $courses = Course::all();
        return view('be/schedules/edit',compact('schedule','sessions', 'teachers', 'subjects', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, $id)
    {
        $schedule = Schedule::find($id);
        
        $schedule->id_session = $rq->id_session;
        $schedule->id_teacher = $rq->id_teacher;
        $schedule->id_subject = $rq->id_subject;
        $schedule->class = $rq->course;
        $schedule->time = $rq->time;
        $schedule->time1 = date('Y-m-d', strtotime($rq->time1));
        $schedule->author = Auth::user()->id;
        // dd($schedule);
        $schedule->save();
        return redirect()->route('waiting_list')->with('msg','add new schedule success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = Schedule::find($id);
        // dd($schedule);
        $schedule->delete();
        return redirect()->back()->with('msg','Delete success !');
    }

    
    public function booking()
    {
        $addresses = Address::all();
        $teachers = Teacher::all();
        $schedules = Schedule::all();
        return view('be/schedules/booking', compact('addresses', 'teachers', 'schedules'));
    }
    public function result_booking(Request $rq)
    {
        $addresses = Address::all();
        $teachers = Teacher::all();
        $address = $rq->id_location;
        $teacher = $rq->id_teacher;
        $day = $rq->day;
        $booking = Schedule::where('id_location','like', "%{$address}%")->where('id_teacher','like', "%{$teacher}%")->where('day','like', "%{$day}%")->get();
        // $data['booking'] = $booking;
        // dd($day);
        return view('be/schedules/booking', compact('booking', 'addresses', 'teachers'));
    }
    
    public function add_booking(Request $rq)
    {
        $id = $rq->id;
        $schedules = Schedule::all();
        $add_booking = Schedule::find($id);
        $add_booking->booking = Auth::user()->id;
        $add_booking->status = 'Processing';
        $add_booking->save();
        // dd($id);
        return redirect()->route('list_booking');
    }
    
    public function schedules()
    {
        $schedules = Schedule::where('author', Auth::user()->id)->get();
        // dd($schedules[0]->subject->name);
        return view('be/schedules/schedules', compact('schedules'));
    }
    
    public function cancel_booking(Request $rq)
    {
        $id = $rq->id;
        $cancel_booking = Schedule::find($id);
        $cancel_booking->booking = null;
        $cancel_booking->status = 'Cancel';
        $cancel_booking->save();
        // dd($id);
        return redirect()->route('list_booking');
    }

    
    public function schedule_booking(Request $rq)
    {
            $schedule = new Schedule();
            $schedule->id_location = $rq->id_location;
            $schedule->id_teacher = $rq->id_teacher;
            $schedule->class = $rq->course;
            // $schedule->time = $rq->time;
            $schedule->time = $rq->session;
            $schedule->day = $rq->day;
            $schedule->author = Auth::user()->id;
            // $schedule->booking = Auth::user()->id;
            // dd($schedule);
            $schedule->save();
            return redirect()->route('list_booking')->with('msg','oklah');
    }
}
