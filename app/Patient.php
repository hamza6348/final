<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function users(){
        return $this->belongsTo('App\User');

    }


    //check the s





    public function diags(){
        return $this->hasMany('App\Diag');

    }
}
