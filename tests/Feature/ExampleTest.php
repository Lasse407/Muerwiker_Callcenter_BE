<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */



    //          -----------------------         Route Testing       ----------------------------
    // Makes Clear that every Route has its own Path over the Get-Mehtod of Navigation. 
    // Hands over the status-code 200 which means the path is existing. Fails with the Status Code 404 .- not found. 



    public function ShouldFindRouteWork ()
    {
        $response = $this->get('/work');

        $response->assertStatus(200);
    }

    public function ShouldFindRouteLiving ()
    {
        $response = $this->get('/living');

        $response->assertStatus(200);
    }

    public function ShouldFindRouteDS ()
    {
        $response = $this->get('/driving-service');

        $response->assertStatus(200);
    }

    public function ShouldFindRouteContact ()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    public function ShouldFindRouteCC ()
    {
        $response = $this->get('/care-center');

        $response->assertStatus(200);
    }

    public function ShouldFindRouteAdmin ()
    {
        $response = $this->get('/admin');

        $response->assertStatus(200);
    }

}
