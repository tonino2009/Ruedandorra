<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rueda extends Model
{  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'semana', 'comentarios', 'L1', 'L2', 'L3', 'L4', 'L5', 'L6', 'M1', 'M2', 'M3', 'M4', 'M5', 'M6', 'X1', 'X2', 'X3', 'X4', 'X5', 'X6', 'J1', 'J2', 'J3', 'J4', 'J5', 'J6', 'V1', 'V2', 'V3', 'V4', 'V5', 'V6' ,   

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
     'remember_token',
    ];
}
