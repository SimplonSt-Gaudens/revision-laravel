<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
		/**
     * The attributes that should be guarded for arrays.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * [users description]
     * function pour définir la relation avec l'user, ManytoMany
     * @return la methode qui va définir avec quel model la relation est faite.
     */
    public function users()
    {

    	return $this->belongsToMany('App\User');
    }
}
