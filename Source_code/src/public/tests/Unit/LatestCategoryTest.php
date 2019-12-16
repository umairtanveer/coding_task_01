<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LatestCategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */


     public function testExample()
     {
       $response = $this->json('GET', '/api/latest/session/categories');
       $response->assertStatus(200);
     }
}
