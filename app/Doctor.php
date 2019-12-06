<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
  public function Patiant(){
return this->belongsTo('App\Patiant');

  }


}
