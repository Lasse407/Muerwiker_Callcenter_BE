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
                    'surname' => 'Beate',
                    'forename' => 'Andres',
                    'email' => 'andres@muerwiker.de',
                    'phone_number' => '0461 50306677',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Andresen',
                    'forename' => 'Andreas',
                    'email' => 'a.andresen@muerwiker.de',
                    'phone_number' => '0176 11119271',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Arnold-Richardson',
                    'forename' => 'Stefanie',
                    'email' => 'arnold@muerwiker.de',
                    'phone_number' => '0151 18064412',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Asmussen',
                    'forename' => 'Johannes',
                    'email' => 'j.asmussen@muerwiker.de',
                    'phone_number' => '0160 8938011',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Bänsch',
                    'forename' => 'Gerd',
                    'email' => 'baensch@muerwiker.de',
                    'phone_number' => '0461 50306902',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Beier',
                    'forename' => 'Andreas',
                    'email' => 'beier@muerwiker.de',
                    'phone_number' => '0151 18857358',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Bier',
                    'forename' => 'Sandra',
                    'email' => 'bier@muerwiker.de',
                    'phone_number' => '0461 50306249',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Bochmann',
                    'forename' => 'Carsten',
                    'email' => 'bochmann@muerwiker.de',
                    'phone_number' => '0461 50306261',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Boltendahl',
                    'forename' => 'Karin',
                    'email' => 'boltendahl@muerwiker.de',
                    'phone_number' => '0461 50306310',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Bork',
                    'forename' => 'Kirsten',
                    'email' => 'bork@muerwiker.de',
                    'phone_number' => '0461 50306672',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Ulrike',
                    'forename' => 'Brandt',
                    'email' => 'u.brandt@muerwiker.de',
                    'phone_number' => '0176 11119252',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Bordersen',
                    'forename' => 'Frank',
                    'email' => 'brodersen@muerwiker.de',
                    'phone_number' => '0461 50306633',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Bunn',
                    'forename' => 'Sylvia',
                    'email' => 'bunn@muerwiker.de',
                    'phone_number' => '0176 11119272',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Diedrichsen',
                    'forename' => 'Martina',
                    'email' => 'diedrichsen@muerwiker.de',
                    'phone_number' => '0151 51885862',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Eggert',
                    'forename' => 'Tina',
                    'email' => 'eggert@muerwiker.de',
                    'phone_number' => '0461 50306674',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Endlein',
                    'forename' => 'Nicholas',
                    'email' => 'endlein@muerwiker.de',
                    'phone_number' => '0461 50306259',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Eßberger',
                    'forename' => 'Frank',
                    'email' => 'essberger@muerwiker.de',
                    'phone_number' => '0461 50306269',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Euhus',
                    'forename' => 'Jan',
                    'email' => 'euhus@muerwiker.de',
                    'phone_number' => '0461 50306714',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Faltin',
                    'forename' => 'Annika',
                    'email' => 'faltin@muerwiker.de',
                    'phone_number' => '0461 50306237',
                    'picture' => 'none',
                    'is_primary' => true,
                ],                [
                    'surname' => 'Feddersen',
                    'forename' => 'Kirsten',
                    'email' => 'k.feddersen@muerwiker.de',
                    'phone_number' => '0461 50306257',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Freundlich',
                    'forename' => 'Björn',
                    'email' => 'freundlich@muerwiker.de',
                    'phone_number' => '0176 11119285',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Greiner',
                    'forename' => 'Paul',
                    'email' => 'greiner@muerwiker.de',
                    'phone_number' => '0461 50306264',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Grothe',
                    'forename' => 'Doris',
                    'email' => 'grothe@muerwiker.de',
                    'phone_number' => '017611119044',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Heimann',
                    'forename' => 'Mareile',
                    'email' => 'heimann@muerwiker.de',
                    'phone_number' => '0461 50306237',
                    'picture' => 'none',
                    'is_primary' => true,
                ],                [
                    'surname' => 'Feddersen',
                    'forename' => 'Kirsten',
                    'email' => 'k.feddersen@muerwiker.de',
                    'phone_number' => '0461 50306257',
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
