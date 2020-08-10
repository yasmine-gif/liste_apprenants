<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    protected $guarded=[];

    public function tuteur(){
        return $this->belongsTo('App\Tuteur');
    }
}
