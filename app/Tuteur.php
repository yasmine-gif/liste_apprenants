<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
    protected $guarded=[];

    public function apprenants(){
        return $this->hasMany('App/Apprenant');
    }
}
