<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $hidden = ['id'];


    public function users()
    {
    	return $this->belongsToMany('App\User');
    }
}
