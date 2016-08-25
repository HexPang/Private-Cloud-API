<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CloudData extends Model
{
    protected $table = 'data';
    protected $fillable = ['app_id','key','value'];

}
