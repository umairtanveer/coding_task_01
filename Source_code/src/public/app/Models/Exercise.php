<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
  protected $table = "exercises";

  public function category()
   {
       return $this->hasOne('App\Models\Category','id','category_id');
   }
}
