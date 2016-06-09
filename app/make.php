<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class make extends Model
{
    
    public function pahrm(){
        
        
        return $this->belongsTo('App\Pharm');
    }
}
