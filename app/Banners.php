<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    //protected $table ="banners";
    //protected $primarykey ="id";
    protected $fillable = [
       'user_id', 'clasification_id', 'name', 'image', 'active'
    ];
}
