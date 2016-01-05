<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContactControllerTest extends TestCase
{
    private $contactMock;
    
    public function setUp()
    {
        parent::setUp();
        $this->contactMock = Mockery::mock('App\Models\Contact');
    }
    
    public function tearDown()
    {
        parent::tearDown();
        Mockery::close();
    }

    public function testShouldGetIndex()
    {
        $this->contactMock->shouldReceive('all')->once()->andReturn(array());
        $this->app->instance('App\Models\Contact', $this->contactMock);
    
        $response = $this->call('GET', '/contact');
        $this->assertEquals(200, $response->status());
    }
}
