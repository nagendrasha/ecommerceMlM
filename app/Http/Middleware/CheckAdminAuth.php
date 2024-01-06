<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use App\Providers\RouteServiceProvider;

class CheckAdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check())
        {     
             if(Auth::User()->role == 1)
             {
                 return $next($request);
             }else if(Auth::User()->role == 2){
                return redirect(RouteServiceProvider::USERHOME);
             }
        }
        return abort(404);
    }
}
