<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaLekow extends Model
{
    public function apteczka()
    {
        return $this->belongsToMany('App\Apteczka',['id']);
    }

    public function obrot()
    {
        return $this->hasOne('App\Obrotlekow', ['id']);
    }

    

}
