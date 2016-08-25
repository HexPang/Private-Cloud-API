<?php

namespace App\Http\Controllers;

use App\CloudData;
use Illuminate\Http\Request;

use App\Http\Requests;
use Response;

class APIController extends Controller
{
  public function GetKey(Request $request,$app_id,$key){
    $data = CloudData::where('app_id',$app_id)->where('key',$key)->first();
    return Response::json(1,$data);
  }
  public function Process(Request $request,$app_id,$key){
      $data = CloudData::where('app_id',$app_id)->where('key',$key)->first();
      if($data) {
          //更新
          $item = urldecode($request->get('data'));
          $data->data = $item;
          $data->save();
      }else{
          //插入
          $data = CloudData::create([
              'app_id' => $app_id,
              'key' => $key,
              'data' => urldecode($request->get('data'))
          ]);
      }
      return Response::json(1,$data);
  }
}
