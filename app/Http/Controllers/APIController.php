<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Response;

class APIController extends Controller
{
    public function Process(Request $request,$app_id,$method){
        if($method == 'update'){

        }
        return Response::json(1,$request->data);
    }
}
