<?php

namespace App;
use App\User as User;

use Illuminate\Database\Eloquent\Model;

class Horary extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_id', 'semana', 'LE', 'LS', 'LC', 'ME','MS','MC','XE','XS','XC','JE','JS','JC','VE','VS','VC','comentario',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

public function user()
{
	return $this->belongsTo(User::class);
}

}
