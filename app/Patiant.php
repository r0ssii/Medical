<?php
# @Date:   2019-12-06T11:36:59+00:00
# @Last modified time: 2019-12-06T11:53:31+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Patiant extends Model
{
    public function Doctor(){
return this->hasMany('App\Patiant');

    }
}
