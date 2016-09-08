<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HorarioSemanal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'LE', 'LS', 'LC', 'ME','MS','MC','XE','XS','XC','JE','JS','JC','VE','VS','VC',
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
