<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CloudUser extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
