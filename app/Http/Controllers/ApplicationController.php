<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\CloudApp;
use App\CloudData;

class ApplicationController extends Controller
{
    public function ShowView(Request $request,$view,$data = []){
      if(substr($view,0,3) == "id-"){
        $application_id = substr($view,3);
        $view = 'view';
        $items = CloudData::where('app_id',$application_id)->get();
        $data['items'] = $items;
      }
      if($view == 'list'){
        $apps = CloudApp::where('user_id',$request->user()->id)->get();
        $data = ['apps'=>$apps];
      }
      $data['user'] = $request->user();
      return view('application.' . $view,$data);
    }

    public function PostRequest(Request $request,$view){
      $msg = null;
      if($view == 'create'){
        $validator = Validator::make($request->all(), CloudApp::$rule);
        if($validator->fails()){
          $msg = "Application name not validate.";
        }else{
          $app = CloudApp::create([
            'app_name' => $request->app_name,
            'user_id' => $request->user()->id,
            'app_id' => str_random(32)
          ]);
          if($app){
            return redirect('/application/list');
          }else{
            $msg = "Cannot create application.";
          }
        }
      }
      return $this->ShowView($request,$view,['msg'=>$msg]);
    }
}
