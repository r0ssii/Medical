<?php
# @Date:   2019-12-03T14:24:59+00:00
# @Last modified time: 2019-12-03T15:18:58+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  public function users()
  {
return $this->belongsToMany('App\User', 'user_role');
  }
}
