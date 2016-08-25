<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CloudApp extends Model
{
    protected $table = 'apps';
    protected $fillable = ['user_id','app_name','app_id'];

    public static $rule = [
      'app_name' => 'required'
    ];
}
