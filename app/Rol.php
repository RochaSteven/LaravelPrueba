<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public function personas(){
        return $this->belongsToMany(Persona::class);
    }
}
