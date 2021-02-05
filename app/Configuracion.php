<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    //
    public function persona(){
        return $this->hasOne(Persona::class);
    }
    
}
