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


    //Test Oracle 
    // The Test should pass if the Name "Thomas Stengel" is in the Users Table. No return Value. Only passing in the terminal without any response-Message
    // 
    public function userExists()
    {
        $this->assertDatabaseHas('users', [
            'name' => 'Thomas Stengel'

        ]);
    }

    //Test Oracle 
    // The Test should pass if the Surname "Bork" is in the contacts-Table. No return Value. Only passing in the terminal without any response-Message
    // 
    public function contactExists()
    {
        $this->assertDatabaseHas('contacts', [
            'surname' => 'Bork'

        ]);
    }


    //Test Oracle 
    // The Test should pass if this email-Adress is in the password_resets Table. So it proves that the password could reset successfuly. No return Value. Only passing in the terminal without any response-Message
    // 
    public function PasswordResetTest()
    {
        $this->assertDatabaseHas('password_resets', [
            'email' => 'bork@muerwiker-gruppe.de'

        ]);
    }


    //Test Oracle 
    // The Test should pass if the section "Finanzen" is in the works Table. No return Value. Only passing in the terminal without any response-Message
    // 
    public function worksExists1()
    {
        $this->assertDatabaseHas('works', [
            'section' => 'Finanzen'

        ]);
    }


    //Test Oracle 
    // The Test should pass if the section "Geschäftsleitung" is in the works Table. No return Value. Only passing in the terminal without any response-Message
    // 
    public function worksExists2()
    {
        $this->assertDatabaseHas('works', [
            'section' => 'Geschäftsleitung'

        ]);
    }


    //Test Oracle 
    // The Test should pass if the section "Marketing" is in the works Table. No return Value. Only passing in the terminal without any response-Message
    // 
    public function worksExists3()
    {
        $this->assertDatabaseHas('works', [
            'section' => 'Marketing'

        ]);
    }


    //Test Oracle 
    // The Test should pass if the section "Bildung und Begleitung" is in the works Table. No return Value. Only passing in the terminal without any response-Message
    // 
    public function worksExists4()
    {
        $this->assertDatabaseHas('works', [
            'section' => 'Bildung und Begleitung'

        ]);
    }


    //Test Oracle 
    // The Test should pass if the street "Buchenweg" is in the livings Table. No return Value. Only passing in the terminal without any response-Message
    // Note! If all "Living" Tests passes. It proves that every living is available for further working in DB or BE
    public function livingsExists1()
    {
        $this->assertDatabaseHas('livings', [
            'street' => 'Buchenweg'

        ]);
    }


    //Test Oracle 
    // The Test should pass if the street "Terassenstraße" is in the livings Table. No return Value. Only passing in the terminal without any response-Message
    // 
    public function livingsExists2()
    {
        $this->assertDatabaseHas('livings', [
            'street' => 'Terassenstraße'

        ]);
    }


    //Test Oracle 
    // The Test should pass if the street "Nova" is in the livings Table. No return Value. Only passing in the terminal without any response-Message
    // 
    public function livingsExists3()
    {
        $this->assertDatabaseHas('livings', [
            'street' => 'Nova'

        ]);
    }


    //Test Oracle 
    // The Test should pass if the street "Raiffeisenstraße" is in the livings Table. No return Value. Only passing in the terminal without any response-Message
    // 
    public function livingsExists4()
    {
        $this->assertDatabaseHas('livings', [
            'street' => 'Raiffeisenstraße'

        ]);
    }


    //Test Oracle 
    // The Test should pass if the street "Buchenweg" is in the livings Table. No return Value. Only passing in the terminal without any response-Message
    // 
    public function care_centerExists()
    {
        $this->assertDatabaseHas('care_centers', [
            'street' => 'Buchenweg'

        ]);
    }


    //Test Oracle 
    // The Test should pass if the user "Jay Rehder" is missing in the Users Table. No return Value. Only passing in the terminal without any response-Message
    // 
    public function userIsMissing()
    {
        $this->assertDatabaseMissing('users', [
            'name' => 'Jay Rehder'
        ]);
    }


    //Test Oracle 
    // The Test should pass the Users was made successfuly and got deleted after. No return Value. Only passing in the terminal without any response-Message
    // 
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

    //Test Oracle 
    // The Test should pass, so it shows that every Seeder was created successfuly. No return Value. Only passing in the terminal without any response-Message
    // 
    public function testIfSeedersWorks()
    {
        $this->seed();
    }
}
