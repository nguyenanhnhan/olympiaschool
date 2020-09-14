<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
    // function __construct()
	// {
    //     $schools = School::all();
    //     // $districts = Districts::all();
	// 	view::share('schools',$schools);
	// 	// view::share('districts',$districts);
    // }
    public function index()
    {
        $users = User::all();
        return view('be/user/list', ['users'=>$users]);
    }

    public function create()
    {
        $roles = Role::all();
        return view('be/user/add', compact('roles'));
    }
    public function store(Request $rq)
    {
        $this->validate($rq,[
            'name' => 'required|max:500',
            'email' => 'required',
            'pwd' => 'required',
            'repwd' => 'required| same:pwd',

        ],[
            'name.required' =>'please insert name',
            'email.required' =>'please insert email',
            'pwd.required' => 'please insert password',
            'repwd.required' => 'please insert Re-password',
            'repwd.same' => 'nhập lại mà cũng sai. -_-',

        ]);
        // try {
            $user = new User();
            $user->name = $rq->name;
            $user->email = $rq->email;
            $user->role = $rq->role;
            $user->mobile = $rq->mobile;
            $user->password = bcrypt($rq->pwd);
            if ($rq->hasFile('image')) {
                $file = $rq->file('image');
                $name = $file->getClientOriginalName();
                $img = str_random(4)."-".$name;
                while (file_exists("upload/users/".$img)){
                    $img = str_random(4)."-".$name;
                }
                $file->move("upload/users", $img);
                $user->image = $img;
            } else {
                $user->image = 'default.png';
            }
            $user->save();
            return redirect('admin/users/list')->with('msg','thêm quản trị viên thành công');
        // } catch (\Exception  $ex) {
        //     return back()->withErrors($ex->getMessage());
        // }
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('be/user/edit',['user'=>$user]);
    }
    public function update(Request $rq, $id)
    {
        $this->validate($rq,[
            'name' => 'required|max:500',
            'email' => 'required',

        ],[
            'name.required' =>'please insert name',
            'email.required' =>'please insert email',

        ]);
        $user = User::find($id);
        $user->name = $rq->name;
        $user->email = $rq->email;
        $user->role = '1';
        $user->mobile = $rq->mobile;
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
            $user->password = bcrypt($rq->pwd);
        }
        $user->save();
        return redirect()->back()->with('msg','sửa thông tin thành công');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/users/list')->with('msg','xóa quản trị viên thành công !');
    }

    public function getloginadmin()
    {
        return view('be/login');
    }

    public function postloginadmin(Request $rq)
    {
        $this->validate($rq,[
            'email' => 'required',
            'pwd' => 'required',

        ],[
            'pwd.required' =>'please insert password',
            'email.required' =>'please insert email',

        ]);
        // dd($rq->pwd);
        if (Auth::attempt(['email' => $rq->email, 'password' => $rq->pwd])) {
            return redirect()->route('select_school');
        } else {
            return redirect('admin/login')->with('msg','The account or password you entered was invalid!');
        }
    }
    public function logoutadmin()
    {
        Auth::logout();
        return redirect('admin/login')->with('msg','Đăng xuất thành công bạn ôi !');
    }
}
