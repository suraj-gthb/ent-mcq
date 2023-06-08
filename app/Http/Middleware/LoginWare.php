<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginWare
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
        $logins = $request->session()->get('admin_username');
        if($logins!='')
        {
            return $next($request);
        }
        else
        {
            return redirect('admin/login');
        }
    }
}
