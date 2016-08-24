<?php

namespace App\Http\Middleware;

use App\CloudApp;
use Closure;
use Response;

class AppAuthMiddleware
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
//        return Response::json(1,);
        if(!$request->app_id){
            return Response::Json(-1);
        }
        if(!$request->action){
            return Response::Json(-2);
        }
        if(!$request->has('data')){
            return Response::Json(-3);
        }
        if(!$request->has('sign')){
            return Response::Json(-4);
        }
        $app_id = $request->app_id;
        $sign = $request->get('sign');
        $data = $request->get('data');

        $hash = md5($app_id.$data);
        if($sign != $hash){
            return Response::Json(-10);
        }
        $application = CloudApp::where('id','=',$app_id)->first();
        $request->data = json_decode(urldecode($data),true);
        return $next($request);
    }
}
