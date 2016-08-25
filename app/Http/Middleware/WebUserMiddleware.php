<?php

namespace App\Http\Middleware;

use Closure;

class WebUserMiddleware
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
        if(!$request->session()->get('user')){
          if($request->view != 'login' && $request->view != 'register'){
            return redirect('/login');
          }
        }
        $request->setUserResolver(function() use ($request) {
            return $request->session()->get('user');
        });
        return $next($request);
    }
}
