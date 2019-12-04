<?php
# @Date:   2019-12-03T16:29:37+00:00
# @Last modified time: 2019-12-03T16:39:48+00:00




namespace App\Http\Middleware;

use Closure;

class AuthRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, String $role)
    {
      if($request->user() || !$request->user()->hasRole($role)){
        return   return redirect()->route('home');
      }
        return $next($request);
    }
}
