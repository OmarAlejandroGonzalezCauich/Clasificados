<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spots extends Model
{
    //protected $table ="spots";
    //protected $primarykey ="id";
    protected $fillable = [
        'user_id', 'clasification_id', 'name_service', 'address', 'telephone', 'email',
        'promotion', 'image', 'active'
    ];
}
