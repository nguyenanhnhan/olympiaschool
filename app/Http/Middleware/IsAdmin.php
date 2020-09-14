<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role == 1 || $user->role == 2) {
                return $next($request);
            }
            else{
                return redirect('admin/login') ->with('msg','Bạn chưa đủ đẹp trai để truy cập, vui lòng liên hệ quản trị viên');
            }
        }
        else{
            return redirect('admin/login')->with('msg','đăng nhập đã bạn ơiiiii !');;
        }
    }
}
