<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\CloudUser;

class ViewController extends Controller
{
  public function ShowView($view = 'index',$data = null){
    if(!$data){
      return view($view);
    }
    return view($view,$data);
  }

  public function PostRequest(Request $request,$view){
    $msg = null;
    if($view == 'login'){
      $validator = Validator::make($request->all(), ['email' => 'required|email','password' => 'required',]);
      if ($validator->fails()) {
        $msg = "信息不完整.";
      }else{
        $user = CloudUser::where('email',$request->email)->first();
        if($user && Hash::check($request->password,$user->password)){
          // return redirect('/',302,[
          //     'Set-Cookie' => 'token=' . $user->token
          // ]);
          dd('wtf');
        }
      }
    }else if($view == 'register'){
      $validator = Validator::make($request->all(), [
          'email'    => 'required|email',
          'name'     => 'required',
          'password' => 'required',
      ]);
      $msg = "";
      $user = null;
      if ($validator->fails()) {
          $msg = "信息不完整.";
      }else{
          $user = CloudUser::where('email',$request->get('email'))->first();
          if($user){
              $msg = "邮箱已存在.";
              $user = null;
          }else{
              $user = CloudUser::where('name',$request->get('name'))->first();
              if($user){
                  $msg = '昵称已存在';
                  $user = null;
              }else{
                  $user = CloudUser::create([
                      'name' => $request->get('name'),
                      'email' => $request->get('email'),
                      'password' => app('hash')->make($request->get('password'))
                  ]);
                  if(!$user){
                      $msg = "注册失败.";
                      $user = null;
                  }else{
                      $msg = "注册成功.";
                  }
              }
          }
      }
    }
    return $this->ShowView($view,['msg'=>$msg]);
  }
}
