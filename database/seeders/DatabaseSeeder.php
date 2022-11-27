<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Work
            $works= [
                [
                    'section' => 'Arbeiten',
                    'emergency_number' => '0152 123456',
                    'location' => 'Flensburg',
                    'street' => 'Treeneweg',
                    'house_number' => '12',
                    'picture' => 'none',
                    'department' => 'Holzbearbeitung',
                ],
            ];
            foreach ($works as $work)
            {
                DB::table('works')->insert($work);
            }

        // Living
            $livings= [
                [
                    'section' => 'Wohnen',
                    'emergency_number' => '0152 456789',
                    'location' => 'Flensburg',
                    'street' => 'Musterstraße',
                    'house_number' => '24',
                    'picture' => 'none',
                ],
                [
                    'section' => 'Wohnen',
                    'emergency_number' => '0152 654321',
                    'location' => 'Niebüll',
                    'street' => 'Musterstraße',
                    'house_number' => '36',
                    'picture' => 'none',
                ],
            ];
            foreach ($livings as $living)
            {
                DB::table('livings')->insert($living);
            }

        // Administration
            $admins= [
                [
                    'section' => 'Stab',
                    'emergency_number' => '0152 123456',
                    'division' => 'Buchhaltung',
                ],
                [
                    'section' => 'Stab',
                    'emergency_number' => '0152 123456',
                    'division' => 'Marketing',
                ],
                [
                    'section' => 'Stab',
                    'emergency_number' => '0152 123456',
                    'division' => 'Geschäftsführung',
                ],
            ];
            foreach ($admins as $admin)
            {
                DB::table('admins')->insert($admin);
            }

        // Care Center
            $care_centers= [
                [
                    'section' => 'Tagesförderstätte',
                    'emergency_number' => '0152 123456',
                    'location' => 'Flensburg',
                    'street' => 'Schottweg',
                    'house_number' => '55',
                    'picture' => 'none',
                ],
                [
                    'section' => 'Tagesförderstätte',
                    'emergency_number' => '0152 654321',
                    'location' => 'Schafflund',
                    'street' => 'Musterstraße',
                    'house_number' => '12',
                    'picture' => 'none',
                ],
            ];

            foreach ($care_centers as $care_center)
            {
                DB::table('care_centers')->insert($care_center);
            }

        // Drive Service
            $driving_services= [
                [
                    'section' => 'Fahrdienst',
                    'emergency_number' => '0173 555555',
                ],
            ];
            foreach ($driving_services as $driving_service)
            {
                DB::table('driving_services')->insert($driving_service);
            }

        // Contact Persons
            $contacts= [
                [
                    'surname' => 'Doe',
                    'forename' => 'John',
                    'email' => 'john.doe@muerwiker.de',
                    'phone_number' => '0461 123567',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Mustermann',
                    'forename' => 'Max',
                    'email' => 'max.mustermann@muerwiker.de',
                    'phone_number' => '0461 7654321',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
            ];
            foreach ($contacts as $contact)
            {
                DB::table('contacts')->insert($contact);
            }

    }
}
