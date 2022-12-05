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

    //          -----------------------         Route Testing   (HTTP TESTING)    ----------------------------
    // Makes Clear that every Route has its own Path over the Get-Method of Navigation.
    // Hands over the status-code 200 which means the path is existing. Fails with the Status Code 404 .- not found

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

    //          -----------------------         DB Testing       ----------------------------
    // First two Tests handles small actions within the Database 
    // These got copied for the remaining Tables within the Database to prove the same thing.
    // Third Test tests proves the ability to delete curtain users from DB

    public function userExists()
    {
        $this->assertDatabaseHas('users', [
            'name' => 'Thomas Stengel'

        ]);
    }

    public function contactExists()
    {
        $this->assertDatabaseHas('contacts', [
            'surname' => 'Bork'

        ]);
    }

    public function PasswordResetTest()
    {
        $this->assertDatabaseHas('password_resets', [
            'email' => 'bork@muerwiker-gruppe.de'

        ]);
    }

    public function worksExists1()
    {
        $this->assertDatabaseHas('works', [
            'section' => 'Finanzen'

        ]);
    }

    public function worksExists2()
    {
        $this->assertDatabaseHas('works', [
            'section' => 'Geschäftsleitung'

        ]);
    }

    public function worksExists3()
    {
        $this->assertDatabaseHas('works', [
            'section' => 'Marketing'

        ]);
    }

    public function worksExists4()
    {
        $this->assertDatabaseHas('works', [
            'section' => 'Bildung und Begleitung'

        ]);
    }

    public function livingsExists1()
    {
        $this->assertDatabaseHas('living', [
            'street' => 'Buchenweg'

        ]);
    }

    public function livingsExists2()
    {
        $this->assertDatabaseHas('living', [
            'street' => 'Terassenstraße'

        ]);
    }

    public function livingsExists3()
    {
        $this->assertDatabaseHas('living', [
            'street' => 'Nova'

        ]);
    }

    public function livingsExists4()
    {
        $this->assertDatabaseHas('living', [
            'street' => 'Raiffeisenstraße'

        ]);
    }

    public function care_centerExists()
    {
        $this->assertDatabaseHas('care_centers', [
            'street' => 'Buchenweg'

        ]);
    }

    public function userIsMissing()
    {
        $this->assertDatabaseMissing('users', [
            'name' => 'Jay Rehder'
        ]);
    }

    public function deleteUser ()
    {
        $user = User::factory()->count(1)->make();

        $user = User::first();

        if($user)
        {
            $user->delete();

        }

        $this->assertTrue(True);
    }

    
    //          -----------------------         Seeder Testing       ----------------------------
    //


    public function testIfSeedersWorks()
    {
        $this->seed();
    }
}
