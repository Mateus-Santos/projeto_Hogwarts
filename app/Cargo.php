<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{

    public function funcionario(){
        return $this->hasMany('App\Funcionario');
    }
}
