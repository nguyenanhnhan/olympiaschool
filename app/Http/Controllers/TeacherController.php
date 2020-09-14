<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Address;
use App\Lesson_plan;
use Auth;
use Illuminate\Http\Request;
use App\Mail\SendmailTeacher;
use Mail;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $teacher_id = Auth::guard('teacher')->user()->id;
        // $lps = Lesson_plan::where('teacher_id', $teacher_id)->get();
        $teachers = Teacher::all();
        return view('be/teachers/list', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addresses = Address::all();
        return view('be/teachers/add', compact('addresses'));
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
            'fullname' => 'required|max:500',
            'email' => 'required',
            'id_address' => 'required',
            'pwd' => 'required',
            'repwd' => 'required| same:pwd',
        ],[
            'name.required' =>'please insert name',
            'email.required' =>'please insert email',
            'id_address.required' =>'please select address',
            'pwd.required' => 'please insert password',
            'repwd.required' => 'please insert Re-password',
            'repwd.same' => 'nhập lại mà cũng sai. -_-',
        ]);
        // try {
            $teacher = new Teacher();
            $teacher->fullname = $rq->fullname;
            $teacher->address = $rq->address;
            $teacher->dob = $rq->dob;
            $teacher->facebook = $rq->facebook;
            $teacher->twitter = $rq->twitter;
            $teacher->email = $rq->email;
            $teacher->mobile = $rq->mobile;
            $teacher->gender = $rq->gender;
            $teacher->role = '3';
            $teacher->password = bcrypt($rq->pwd);
            if ($rq->hasFile('image')) {
                $file = $rq->file('image');
                $name = $file->getClientOriginalName();
                $img = str_random(4)."-".$name;
                while (file_exists("upload/teachers/".$img)){
                    $img = str_random(4)."-".$name;
                }
                $file->move("upload/teachers", $img);
                $teacher->image = $img;
            } else {
                $teacher->image = 'logo.png';
            }
            $teacher->id_address = $rq->id_address;
            // $evaluation = $teacher;
        // Mail::to($evaluation->email)->send(new SendmailTeacher($evaluation));
            $teacher->save();
            return redirect('admin/teachers/list')->with('msg','oklah');
        // } catch (\Exception  $ex) {
        //     return back()->withErrors($ex->getMessage());
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('be/teachers/edit',['teacher'=>$teacher]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, $id)
    {
        $this->validate($rq,[
            'fullname' => 'required|max:500',
            'email' => 'required',
        ],[
            'name.required' =>'please insert name',
            'email.required' =>'please insert email',
        ]);
        // try {
            // dd($rq->image);
            $teacher = Teacher::find($id);
            $teacher->fullname = $rq->fullname;
            $teacher->address = $rq->address;
            $teacher->dob = $rq->dob;
            $teacher->facebook = $rq->facebook;
            $teacher->twitter = $rq->twitter;
            $teacher->email = $rq->email;
            $teacher->mobile = $rq->mobile;
            $teacher->gender = $rq->gender;
            if ($rq->hasFile('image')) {
                $file = $rq->file('image');
                $name = $file->getClientOriginalName();
                $img = str_random(4)."-".$name;
                while (file_exists("upload/teachers/".$img)){
                    $img = str_random(4)."-".$name;
                }
                $file->move("upload/teachers", $img);
                unlink("upload/teachers/".$teacher->image);
                $teacher->image = $img;
            } else {
                $teacher->image = 'default.png';
            }
            $teacher->save();
            return redirect('admin/teachers/list')->with('msg','oklah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect('admin/teachers/list')->with('msg','Delete success !');
    }

    
    public function getloginteacher()
    {
        return view('be/teacher_login');
    }

    public function postloginteacher(Request $rq)
    {
        $this->validate($rq,[
            'email' => 'required',
            // 'pwd' => 'required',

        ],[
            // 'pwd.required' =>'please insert password',
            'email.required' =>'please insert email',

        ]);
        // dd($rq->all());
        
        if (Auth::guard('teacher')->attempt(['email' => $rq->email, 'password' => $rq->pwd])) {
            // dd('đăng nhập thành công');
            return redirect()->route('teacher_index', []);
            // return redirect('teacher/dashboard');
        } else {
            return redirect()->route('page_login', [])->with('msg','The account or password you entered was invalid!');
        }
        
    }
    public function logoutteacher()
    {
        Auth::guard('teacher')->logout();
        return redirect()->route('page_login')->with('msg','Logout success!');
    }

    
    public function teacher_index()
    {
        $teacher = Auth::guard('teacher')->user();
        $teacher_id = Auth::guard('teacher')->user()->id;
        $lps = Lesson_plan::where('teacher_id', $teacher_id)->get();
        return view('teachers.pages.index', compact('teacher', 'lps'));
    }
    public function teacher_profile($id)
    {
        $teacher = Auth::guard('teacher')->user();
        return view('teachers.pages.profile', compact('teacher'));
    }
    
    public function profile_update(Request $rq, $id)
    {
        // try {
            // dd($rq->image);
            $teacher = Teacher::find($id);
            $teacher->address = $rq->address;
            $teacher->facebook = $rq->facebook;
            $teacher->twitter = $rq->twitter;
            $teacher->mobile = $rq->mobile;
            if ($rq->hasFile('image')) {
                $file = $rq->file('image');
                $name = $file->getClientOriginalName();
                $img = str_random(4)."-".$name;
                while (file_exists("upload/teachers/".$img)){
                    $img = str_random(4)."-".$name;
                }
                $file->move("upload/teachers", $img);
                // unlink("upload/teachers/".$teacher->image);
                $teacher->image = $img;
            }
            
        if ($rq->changepass == "on")
        {
            $this->validate($rq,[
                'pwd' => 'required',
                'repwd' => 'required| same:pwd',
            ],[
                'pwd.required' => 'please insert password',
                'repwd.required' => 'please insert Re-password',
                'repwd.same' => 'nhập lại mà cũng sai. -_-',
            ]);
            $teacher->password = bcrypt($rq->pwd);
        }
        // dd($teacher);
            $teacher->save();
            return redirect()->back()->with('msg','oklah');
    }
    
    public function teacher_lps($id)
    {
        $teacher = Teacher::find($id);
        $lps = $teacher->lps;
        // dd($lps);
        return view('be.teachers.lps', compact('teacher', 'lps'));
    }
    public function teacher_view_lps($teacher_id, $id)
    {
        $lp = Lesson_plan::find($id);
        $teacher = Teacher::find($teacher_id);
        // $lps = $teacher->lps;
        // dd($lps);
        return view('be.teachers.preview_lp', compact('teacher', 'lp'));
    }
    
}
