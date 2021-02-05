<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public function roles(){
        return $this->belongsToMany(Rol::class);
    }
   
}
