<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiCallTest extends TestCase
{
    /**
     * Call the main api controller test
     *
     * @return void
     */
     public function testBasicRoute()
     {
         $response = $this->get('api/');
         $this->assertEquals(200, $response->getStatusCode());
     }
}
