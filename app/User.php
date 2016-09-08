<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'apellidos', 'phone', 'avatar','cochemarca','cochemodelo','email', 'cargo', 'password', 'contrasena', 'CT','VT','ratio',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
     'remember_token',
    ];

public function horaries()
{
    return $this->hasMany(Horary::class); 
}

}
