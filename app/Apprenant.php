<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    protected $guarded=[];

    public function tuteurs(){
        return $this->belongsTo('App/Tuteur');
    }
}
