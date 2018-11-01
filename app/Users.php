<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //protected $table ="users";
    //protected $primarykey ="id";
    protected $fillable = [
        'role_id','name', 'username', 'email', 'password', 'remember_token', 'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
