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
        if(!$request->app_id){
            return Response::Json(-1);
        }
        $app_id = $request->app_id;
        if($request->method == 'POST'){
          if(!$request->has('data')){
              return Response::Json(-3);
          }
          if(!$request->has('sign')){
              return Response::Json(-4);
          }
          $sign = $request->get('sign');
          $data = $request->get('data');

          $hash = md5($app_id.$data);
          if($sign != $hash){
              return Response::Json(-10,[$sign,$hash]);
          }
          $request->data = json_decode(urldecode($data),true);
        }

        $application = CloudApp::where('app_id','=',$app_id)->first();
        if($application == null){
          return Response::json(-11);
        }


        return $next($request);
    }
}
