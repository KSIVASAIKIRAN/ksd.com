<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   /* public function handle($request, Closure $next, $role)
    {
        if (Auth::check() && $role == 'ROLE_SUPERADMIN') {
            //echo "true";exit;
            return redirect('/superadmin');
        }
        elseif (Auth::check() && $role == 'ROLE_BUSINESSMANAGER') {
            return redirect('/busineesmanager');
        }
        elseif (Auth::check() && $role == 'ROLE_DEALERSHIP') {
            return redirect('/dealership');
        }
        elseif (Auth::check() && $role == 'ROLE_SALESEXECUTIVE') {
            return redirect('/salesexecutive');
        }
        else {
            return $next($request);
        }
    }*/
    public function handle($request, Closure $next, $role)
    {
        if (! $request->user()->hasRole($role)) {
            abort(401, 'This action is unauthorized.');
        }
        return $next($request);
    }
}
