<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Pharm extends Model implements Authenticatable{
    use \Illuminate\Auth\Authenticatable;

   public function makes(){
       
       return $this->hasMany('App\make');
   }
}
