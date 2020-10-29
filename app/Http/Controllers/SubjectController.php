<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Criteria;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('be/subjects/list', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $criterias = Criteria::all();
        return view('be/subjects/add', compact('criterias'));
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
            'name' => 'required|max:500',
        ],[
            'name.required' =>'please insert name',
        ]);
        // try {
            $subject = new Subject();
            $subject->name = $rq->name;
            $subject->code_name = $rq->code_name;
            $subject->criteria_id = $rq->criteria_id;
            $subject->save();
            return redirect()->route('subject_show')->with('msg','oklah');
        // } catch (\Exception  $ex) {
        //     return back()->withErrors($ex->getMessage());
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject::find($id);
        $criterias = Criteria::all();
        return view('be/subjects/edit',compact('subject', 'criterias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, $id)
    {
        $this->validate($rq,[
        ],[
        ]);
        // try {
            // dd($rq->image);
            $subject = Subject::find($id);
            $subject->name = $rq->name;
            $subject->code_name = $rq->code_name;
            $subject->criteria_id = $rq->criteria_id;
            $subject->save();
            return redirect()->route('subject_show')->with('msg','oklah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::find($id);
        $subject->delete();
        return redirect('admin/subjects/list')->with('msg','Delete success !');
    }
}
