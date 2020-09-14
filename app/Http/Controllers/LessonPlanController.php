<?php

namespace App\Http\Controllers;

use App\Lesson_plan;
use App\Teacher;
use Illuminate\Http\Request;
use Auth;

class LessonPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'title' => 'required',
            'file' => 'required',

        ],[
            'file.required' =>'please insert file',
            'title.required' =>'please insert title',

        ]);
            $teacher_id = Auth::guard('teacher')->user()->id;
            $teacher_name = Auth::guard('teacher')->user()->fullname;
            foreach ($rq->file as $key => $value) {
                $lp = new Lesson_plan();
                $lp->teacher_id = $teacher_id;
                $lp->title = $rq->title;
                $lp->note = $rq->note;
                if ($rq->hasFile('file')) {
                    $file = $value;
                    $name = $file->getClientOriginalName();
                    $img = $name;
                    while (file_exists("upload/lesson_plans/$teacher_name".$img)){
                        $img = str_random(4)."-".$name;
                    }
                    $file->move("upload/lesson_plans/$teacher_name", $img);
                    $lp->file = $img;
                    $lp->extension = $file->getClientOriginalExtension();
                } else {
                    $lp->file = '';
                }
                // dd($file->getClientOriginalExtension());
                $lp->save();
            }
        return redirect()->back()->with('msg', 'upload file success!');
        // dd($lp);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lesson_plan  $lesson_plan
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson_plan $lesson_plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lesson_plan  $lesson_plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson_plan $lesson_plan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lesson_plan  $lesson_plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson_plan $lesson_plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lesson_plan  $lesson_plan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = Lesson_plan::find($id);
        $file->delete();
        return redirect()->route('teacher_index')->with('msg','Delete success !');
        // return redirect('admin/teachers/list')->with('msg','Delete success !');
    }
    public function preview($teacher_id, $id)
    {
        $lp = Lesson_plan::find($id);
        // dd($lp);
        $teacher = Teacher::find($teacher_id);
        // dd($lp->file);
        return view('teachers.pages.preview_lp', compact('lp', 'teacher'));
    }
    
    public function preview_for_school()
    {
        $teacher = Teacher::find(1);
        $lps = $teacher->lps;
        // dd($teacher->lps);
        return view('school_preview', compact('lps', 'teacher'));
    }
    public function school_preview($teacher_id, $id)
    {
        $lp = Lesson_plan::find($id);
        // dd($lp);
        $teacher = Teacher::find($teacher_id);
        // dd($lp->file);
        return view('school_preview_lp', compact('lp', 'teacher'));
    }
    
    
    public function lps_dtd1()
    {
        $teachers = Teacher::where('id_address', 5)->get();
        $teacher = Teacher::find(1);
        // dd($teacher->lps);
        return view('dtd1_preview', compact('teachers'));
    }
    public function dtd1_teacher($id)
    {
        $lps = Lesson_plan::where('teacher_id', $id)->get();
        $teacher = Teacher::find($id);
        // dd($lp);
        // dd($lp->file);
        return view('school_preview', compact('lps', 'teacher'));
    }
}
