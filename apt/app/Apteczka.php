<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apteczka extends Model
{
    public function users()
    {
        return $this->hasOne('App\User'); // apteczka może mieć 1 usera
    }

    public function leks()
    {
        return $this->hasMany('App\Lek'); //apteczka ma wiele leków
    }

}
