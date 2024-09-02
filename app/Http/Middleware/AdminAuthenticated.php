<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticated{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::guard('admin')->user()){
           // dd('jkl');
            return $next($request);
        }
        if($request->ajax() || $request->wantsJson()){
            return response('Unauthorized',401);
        }
        else{
          //  dd('jkl');
            return redirect (route('index'));
        }
    }
}
