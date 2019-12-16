<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = "sessions";

    public function score(){
      return $this->hasMany('App\Models\UserExerciseScore', 'session_id', 'id');
    }

    public function sessionExercises(){
      return $this->hasMany('App\Models\SessionExercise', 'session_id', 'id');
    }

}
