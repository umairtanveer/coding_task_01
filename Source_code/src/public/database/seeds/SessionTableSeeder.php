<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $start = strtotime("10 September 2019");
      $end = strtotime("22 July 2020");
      $timestamp = mt_rand($start, $end);
      $timestamp = date("Y-m-d", $timestamp);

      DB::table('sessions')->insert([
         'name' => Str::random(10),
         'session_date' =>$timestamp,
         'created_at'=>date('Y-m-d H:i:s'),
         'updated_at'=>date('Y-m-d H:i:s'),
     ]);
    }
}
