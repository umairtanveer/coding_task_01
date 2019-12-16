<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SessionDetailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
     public function testExample()
     {
       for($i=0;$i<60;$i++){
         $response = $this->json('GET', '/api/session/detail/'.$i);
         $response->assertStatus(200);
       }
     }
}
