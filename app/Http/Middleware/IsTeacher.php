<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsTeacher
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
        if (Auth::guard('teacher')->check()) {
                return $next($request);
        }
        else{
            return redirect('teachers/login')->with('msg','please login!');;
        }
    }
}
