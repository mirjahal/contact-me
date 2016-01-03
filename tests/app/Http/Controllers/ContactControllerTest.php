<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContactControllerTest extends TestCase
{
    public function testShouldGetIndex()
    {
        $response = $this->call('GET', '/contact');
        $this->assertEquals(200, $response->status());
    }
}
