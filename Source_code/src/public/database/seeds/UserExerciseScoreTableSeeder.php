<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserExerciseScoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('user_exercise_scores')->insert([
         'user_id' => rand(1,50),
         'session_id' => rand(1,50),
         'exercise_id' => rand(1,50),
         'session_id' => rand(1,50),
         'score' => rand(50,100),
         'created_at'=>date('Y-m-d H:i:s'),
         'updated_at'=>date('Y-m-d H:i:s'),
     ]);
    }
}
