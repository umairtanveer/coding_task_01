<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserExerciseScore extends Model
{
      protected $table = "user_exercise_scores";

      public function exercise(){
        return $this->hasOne('App\Models\Exercise', 'id', 'exercise_id');
      }
}
