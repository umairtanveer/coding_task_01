<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) {
          $this->call(CategoryTableSeeder::class);
          $this->call(CountryTableSeeder::class);
        }
        for ($i=0; $i < 50; $i++) {
          $this->call(UsersTableSeeder::class);
        }
        for ($i=0; $i < 50; $i++) {
          $this->call(CourseTableSeeder::class);
        }
        for ($i=0; $i < 50; $i++) {
          $this->call(SessionTableSeeder::class);
        }
        for ($i=0; $i < 50; $i++) {
          $this->call(ExerciseTableSeeder::class);
        }
        for ($i=0; $i < 50; $i++) {
          $this->call(SessionExerciseTableSeeder::class);
        }
        for ($i=0; $i < 50; $i++) {
          $this->call(SessionUserTableSeeder::class);
        }
        for ($i=0; $i < 50; $i++) {
          $this->call(UserExerciseScoreTableSeeder::class);
        }
    }
}
