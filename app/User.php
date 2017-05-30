<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * [roles description]
     * function pour définir la relation avec le role, ManyToMany
     * @return la methode qui va définir avec quel model la relation est faite.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
}
