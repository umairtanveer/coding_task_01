<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class APITest extends TestCase
{

    public function testExample()
    {
      $response = $this->json('GET', '/api/sessions');
      $response->assertStatus(200);
    }

}
