<?php
/**
 * Created by PhpStorm.
 * User: hexpang
 * Date: 16/8/24
 * Time: 02:04
 */

namespace App\Services;


use SebastianBergmann\CodeCoverage\Report\Html\Facade;
use Illuminate\Support\Facades\Response;

class ResponseService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Response';
    }

    public static function Json($code,$data = null){
        return Response::json(['code' => $code,'data' => $data]);
    }
}