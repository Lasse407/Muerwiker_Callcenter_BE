<?php
/*
 * Lasse Emmerich - Im Seeder haben wir definiert, woraus der Default-Inhalt der Datenbank besteht. Orientiert wurde sich hierbei an die erhaltenen Daten von Tanja.
 * Durch ausführen des Seeders wird die Datenbank gem. der unten definierten Inhalte befüllt.
 */

namespace Database\Seeders;

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

        // Work --> Objekt Arbeiten
            $works= [
                [
                    'section' => 'Arbeiten',
                    'emergency_number' => '0152 123456',
                    'location' => 'Flensburg',
                    'street' => 'Raiffeisenstraße',
                    'house_number' => '8c',
                    'picture' => 'none',
                    'department' => 'Kaminholz',
                ],
                [
                    'section' => 'Arbeiten',
                    'emergency_number' => '0152 123456',
                    'location' => 'Flensburg',
                    'street' => 'Raiffeisenstraße',
                    'house_number' => '12-14',
                    'picture' => 'none',
                    'department' => 'Elektro, Montage, Verpackung, Bändermontage, Lebensmittel',
                ],
                [
                    'section' => 'Arbeiten',
                    'emergency_number' => '0152 123456',
                    'location' => 'Flensburg',
                    'street' => 'Raiffeisenstraße',
                    'house_number' => '17',
                    'picture' => 'none',
                    'department' => 'Gärtnerei',
                ],
                [
                    'section' => 'Arbeiten',
                    'emergency_number' => '0152 123456',
                    'location' => 'Flensburg',
                    'street' => 'Raiffeisenstraße',
                    'house_number' => '21',
                    'picture' => 'none',
                    'department' => 'Danfoss',
                ],
                [
                    'section' => 'Arbeiten',
                    'emergency_number' => '0152 123456',
                    'location' => 'Flensburg',
                    'street' => 'Wittenberger Weg',
                    'house_number' => '10',
                    'picture' => 'none',
                    'department' => 'Lebensmittelverpackung (LeMi)',
                ],
                [
                    'section' => 'Arbeiten',
                    'emergency_number' => '0152 123456',
                    'location' => 'Flensburg',
                    'street' => 'Glyngöre',
                    'house_number' => 'none',
                    'picture' => 'none',
                    'department' => 'Spektrum, Holz',
                ],
                [
                    'section' => 'Arbeiten',
                    'emergency_number' => '0152 123456',
                    'location' => 'Flensburg',
                    'street' => 'Westerallee',
                    'house_number' => 'none',
                    'picture' => 'none',
                    'department' => 'Spektrum, Verpackung, Nähen, GHC',
                ],
                [
                    'section' => 'Arbeiten',
                    'emergency_number' => '0152 123456',
                    'location' => 'Flensburg',
                    'street' => 'Gewerbegrund',
                    'house_number' => 'none',
                    'picture' => 'none',
                    'department' => 'Metall, Verpackung, Montage',
                ],
                [
                    'section' => 'Arbeiten',
                    'emergency_number' => '0152 123456',
                    'location' => 'Flensburg',
                    'street' => 'Treeneweg',
                    'house_number' => '10',
                    'picture' => 'none',
                    'department' => 'Verpackung, Montage, Besen u. Bürsten, LebensArt',
                ],
                [
                    'section' => 'Arbeiten',
                    'emergency_number' => '0152 123456',
                    'location' => 'Niebüll',
                    'street' => 'Nova',
                    'house_number' => 'none',
                    'picture' => 'none',
                    'department' => 'Nähen, Lego, Bürodienstleistungen, Elektro',
                ],
                [
                    'section' => 'Arbeiten',
                    'emergency_number' => '0152 123456',
                    'location' => 'Niebüll',
                    'street' => 'Fritz-Jannsen-Straße',
                    'house_number' => 'none',
                    'picture' => 'none',
                    'department' => 'Montage, KFZ-Pflege, Verpackung',
                ],
                [
                    'section' => 'Arbeiten',
                    'emergency_number' => '0152 123456',
                    'location' => 'Niebüll',
                    'street' => 'Weberstraße',
                    'house_number' => 'none',
                    'picture' => 'none',
                    'department' => 'Elektro, Küche',
                ],
                [
                    'section' => 'Arbeiten',
                    'emergency_number' => '0152 123456',
                    'location' => 'Niebüll',
                    'street' => 'Schmiedestraße',
                    'house_number' => 'none',
                    'picture' => 'none',
                    'department' => 'Holz, Garten',
                ],
                [
                    'section' => 'Arbeiten',
                    'emergency_number' => '0152 123456',
                    'location' => 'Niebüll',
                    'street' => 'Bahnhofstraße',
                    'house_number' => 'none',
                    'picture' => 'none',
                    'department' => 'Lager',
                ],
            ];
            foreach ($works as $work)
            {
                DB::table('works')->insert($work);
            }

        // Living -> Objekt Wohnen
            $livings= [
                [
                    'section' => 'Wohnen',
                    'emergency_number' => '0152 456789',
                    'location' => 'Flensburg',
                    'street' => 'Terassenstraße',
                    'house_number' => 'none',
                    'picture' => 'none',
                ],
                [
                    'section' => 'Wohnen',
                    'emergency_number' => '0152 456789',
                    'location' => 'Flensburg',
                    'street' => 'Treeneweg',
                    'house_number' => 'none',
                    'picture' => 'none',
                ],
                [
                    'section' => 'Wohnen',
                    'emergency_number' => '0152 456789',
                    'location' => 'Flensburg',
                    'street' => 'Mürwiker Straße',
                    'house_number' => 'none',
                    'picture' => 'none',
                ],
                [
                    'section' => 'Wohnen',
                    'emergency_number' => '0152 456789',
                    'location' => 'Flensburg',
                    'street' => 'Molktestraße',
                    'house_number' => 'none',
                    'picture' => 'none',
                ],
                [
                    'section' => 'Wohnen',
                    'emergency_number' => '0152 456789',
                    'location' => 'Flensburg',
                    'street' => 'Mittendrin',
                    'house_number' => 'none',
                    'picture' => 'none',
                ],
                [
                    'section' => 'Wohnen',
                    'emergency_number' => '0152 456789',
                    'location' => 'Flensburg',
                    'street' => 'Skolehaven',
                    'house_number' => 'none',
                    'picture' => 'none',
                ],
                [
                    'section' => 'Wohnen',
                    'emergency_number' => '0152 456789',
                    'location' => 'Flensburg',
                    'street' => 'Rabenholz',
                    'house_number' => 'none',
                    'picture' => 'none',
                ],
                [
                    'section' => 'Wohnen',
                    'emergency_number' => '0152 456789',
                    'location' => 'Flensburg',
                    'street' => 'ABW',
                    'house_number' => 'none',
                    'picture' => 'none',
                ],
                [
                    'section' => 'Wohnen',
                    'emergency_number' => '0152 456789',
                    'location' => 'Schafflund',
                    'street' => 'Dammacker',
                    'house_number' => 'none',
                    'picture' => 'none',
                ],
                [
                    'section' => 'Wohnen',
                    'emergency_number' => '0152 456789',
                    'location' => 'Munkbrarup',
                    'street' => 'Brombeerhof',
                    'house_number' => 'none',
                    'picture' => 'none',
                ],
                [
                    'section' => 'Wohnen',
                    'emergency_number' => '0152 456789',
                    'location' => 'Niebüll',
                    'street' => 'Buchenweg',
                    'house_number' => 'none',
                    'picture' => 'none',
                ],
                [
                    'section' => 'Wohnen',
                    'emergency_number' => '0152 456789',
                    'location' => 'Niebüll',
                    'street' => 'Schreberweg',
                    'house_number' => 'none',
                    'picture' => 'none',
                ],
                [
                    'section' => 'Wohnen',
                    'emergency_number' => '0152 456789',
                    'location' => 'Niebüll',
                    'street' => 'Weberstraße',
                    'house_number' => 'none',
                    'picture' => 'none',
                ],
                [
                    'section' => 'Wohnen',
                    'emergency_number' => '0152 456789',
                    'location' => 'Niebüll',
                    'street' => 'Theodor-Storm-Straße',
                    'house_number' => 'none',
                    'picture' => 'none',
                ],
            ];
            foreach ($livings as $living)
            {
                DB::table('livings')->insert($living);
            }

        // Admin --> Bereich Stab
            $admins= [
                [
                    'section' => 'Stab',
                    'emergency_number' => '0151 18857333',
                    'division' => 'Presse',
                ],
                [
                    'section' => 'Stab',
                    'emergency_number' => '0151 18857333',
                    'division' => 'Personal',
                ],
                [
                    'section' => 'Stab',
                    'emergency_number' => '0151 18857333',
                    'division' => 'Finanzen',
                ],
                [
                    'section' => 'Stab',
                    'emergency_number' => '0151 18857333',
                    'division' => 'Geschäftsleitung',
                ],
                [
                    'section' => 'Stab',
                    'emergency_number' => '0151 18857333',
                    'division' => 'Marketing',
                ],
                [
                    'section' => 'Stab',
                    'emergency_number' => '0176 11119277',
                    'division' => 'Betriebsrat',
                ],
                [
                    'section' => 'Stab',
                    'emergency_number' => '0151 18857333',
                    'division' => 'Werkstattrat',
                ],
                [
                    'section' => 'Stab',
                    'emergency_number' => '0151 18857333',
                    'division' => 'Datenschutz, Arbeitssicherheit',
                ],
            ];
            foreach ($admins as $admin)
            {
                DB::table('admins')->insert($admin);
            }

        // Care Center --> Objekt Tagesförderstätte
            $care_centers= [
                [
                    'section' => 'Tagesförderstätte',
                    'emergency_number' => '0160 91755716',
                    'location' => 'Flensburg',
                    'street' => 'Raiffeisenstraße',
                    'house_number' => 'none',
                    'picture' => 'none',
                ],
                [
                    'section' => 'Tagesförderstätte',
                    'emergency_number' => '0160 91755716',
                    'location' => 'Flensburg',
                    'street' => 'Harkmor',
                    'house_number' => 'none',
                    'picture' => 'none',
                ],
                [
                    'section' => 'Tagesförderstätte',
                    'emergency_number' => '0160 91755716',
                    'location' => 'Niebüll',
                    'street' => 'none',
                    'house_number' => 'none',
                    'picture' => 'none',
                ],
                [
                    'section' => 'Tagesförderstätte',
                    'emergency_number' => '0160 91755716',
                    'location' => 'Munkbrarup',
                    'street' => 'none',
                    'house_number' => 'none',
                    'picture' => 'none',
                ],

            ];

            foreach ($care_centers as $care_center)
            {
                DB::table('care_centers')->insert($care_center);
            }

        // Drive Service --> Objekt Fahrservice
            $driving_services= [
                [
                    'section' => 'Fahrdienst',
                    'emergency_number' => '0461 70718421',
                ],
            ];
            foreach ($driving_services as $driving_service)
            {
                DB::table('driving_services')->insert($driving_service);
            }

        // Contact --> Objekt Ansprechpartner
            $contacts= [
                [
                    'surname' => 'Beate',
                    'forename' => 'Andres',
                    'email' => 'andres@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306677',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Andresen',
                    'forename' => 'Andreas',
                    'email' => 'a.andresen@muerwiker-gruppe.de',
                    'phone_number' => '0176 11119271',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Arnold-Richardson',
                    'forename' => 'Stefanie',
                    'email' => 'arnold@muerwiker-gruppe.de',
                    'phone_number' => '0151 18064412',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Asmussen',
                    'forename' => 'Johannes',
                    'email' => 'j.asmussen@muerwiker-gruppe.de',
                    'phone_number' => '0160 8938011',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Bänsch',
                    'forename' => 'Gerd',
                    'email' => 'baensch@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306902',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Beier',
                    'forename' => 'Andreas',
                    'email' => 'beier@muerwiker-gruppe.de',
                    'phone_number' => '0151 18857358',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Bier',
                    'forename' => 'Sandra',
                    'email' => 'bier@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306249',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Bochmann',
                    'forename' => 'Carsten',
                    'email' => 'bochmann@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306261',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Boltendahl',
                    'forename' => 'Karin',
                    'email' => 'boltendahl@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306310',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Bork',
                    'forename' => 'Kirsten',
                    'email' => 'bork@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306672',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Ulrike',
                    'forename' => 'Brandt',
                    'email' => 'u.brandt@muerwiker-gruppe.de',
                    'phone_number' => '0176 11119252',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Bordersen',
                    'forename' => 'Frank',
                    'email' => 'brodersen@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306633',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Bunn',
                    'forename' => 'Sylvia',
                    'email' => 'bunn@muerwiker-gruppe.de',
                    'phone_number' => '0176 11119272',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Diedrichsen',
                    'forename' => 'Martina',
                    'email' => 'diedrichsen@muerwiker-gruppe.de',
                    'phone_number' => '0151 51885862',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Eggert',
                    'forename' => 'Tina',
                    'email' => 'eggert@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306674',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Endlein',
                    'forename' => 'Nicholas',
                    'email' => 'endlein@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306259',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Eßberger',
                    'forename' => 'Frank',
                    'email' => 'essberger@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306269',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Euhus',
                    'forename' => 'Jan',
                    'email' => 'euhus@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306714',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Faltin',
                    'forename' => 'Annika',
                    'email' => 'faltin@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306237',
                    'picture' => 'none',
                    'is_primary' => true,
                ],                [
                    'surname' => 'Feddersen',
                    'forename' => 'Kirsten',
                    'email' => 'k.feddersen@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306257',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Freundlich',
                    'forename' => 'Björn',
                    'email' => 'freundlich@muerwiker-gruppe.de',
                    'phone_number' => '0176 11119285',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Greiner',
                    'forename' => 'Paul',
                    'email' => 'greiner@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306264',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Grothe',
                    'forename' => 'Doris',
                    'email' => 'grothe@muerwiker-gruppe.de',
                    'phone_number' => '0176 11119044',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Heimann',
                    'forename' => 'Mareile',
                    'email' => 'heimann@muerwiker-gruppe.de',
                    'phone_number' => '0176 11119268',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Heppner',
                    'forename' => 'Dirk',
                    'email' => 'heppner@muerwiker-gruppe.de',
                    'phone_number' => '0176 11119289',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Holst',
                    'forename' => 'Stefan',
                    'email' => 'holst@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306648',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Homberg',
                    'forename' => 'Jörn',
                    'email' => 'homberg@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306292',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Ingwertsen',
                    'forename' => 'Stefan',
                    'email' => 'ingwertsen@muerwiker-gruppe.de',
                    'phone_number' => '0176 11119262',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Jaspersen',
                    'forename' => 'Birgit',
                    'email' => 'jaspersen@muerwiker-gruppe.de',
                    'phone_number' => '0151 18857357',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Kahl',
                    'forename' => 'Antje',
                    'email' => 'kahl@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306686',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Konnegen',
                    'forename' => 'Daniel',
                    'email' => 'konnegen@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306217',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Köster',
                    'forename' => 'Jörg',
                    'email' => 'köster@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306771',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Kruse',
                    'forename' => 'Miriam',
                    'email' => 'kruse@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306256',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Langbehn',
                    'forename' => 'Ingo',
                    'email' => 'langbehn@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306550',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Levens',
                    'forename' => 'Björn',
                    'email' => 'levens@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306675',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Maßheimer',
                    'forename' => 'Uwe',
                    'email' => 'massheimer@muerwiker-gruppe.de',
                    'phone_number' => '0176 11119279',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Münster',
                    'forename' => 'Olivia',
                    'email' => 'muenster@fds-mail.de',
                    'phone_number' => '0151 16257288',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Neugebauer',
                    'forename' => 'Niklas',
                    'email' => 'neugebauer@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306556',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Nissen',
                    'forename' => 'Ela',
                    'email' => 'e.nissen@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306608',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Peters',
                    'forename' => 'Rita',
                    'email' => 'r.peters@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306551',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Petersen',
                    'forename' => 'Timo',
                    'email' => 'timo.petersen@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306303',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Rohde',
                    'forename' => 'Gerhard',
                    'email' => 'rohde@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306690',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Rudo-Caspersen',
                    'forename' => 'Julia',
                    'email' => 'rudo@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306214',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Scholz',
                    'forename' => 'Sonja',
                    'email' => 'scholz@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306339',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Schramm',
                    'forename' => 'Marc',
                    'email' => 'schramm@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306339',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Secci',
                    'forename' => 'Carlo',
                    'email' => 'secci@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306239',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Sesemann',
                    'forename' => 'Anette',
                    'email' => 'sesemann@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306640',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Stockhaus',
                    'forename' => 'Frieder',
                    'email' => 'stockhaus@muerwiker-gruppe.de',
                    'phone_number' => '0176 11119303',
                    'picture' => 'none',
                    'is_primary' => false,
                ],
                [
                    'surname' => 'Südel',
                    'forename' => 'Gunter',
                    'email' => 'betriebsrat-muerwiker@muerwiker-gruppe.de',
                    'phone_number' => '0176 11119277',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Westphal',
                    'forename' => 'Sebastian',
                    'email' => 'westphal@fds-mail.de',
                    'phone_number' => '0160 90750867',
                    'picture' => 'none',
                    'is_primary' => true,
                ],
                [
                    'surname' => 'Wiedemeyer',
                    'forename' => 'Jana',
                    'email' => 'wiedemeyer@muerwiker-gruppe.de',
                    'phone_number' => '0461 50306732',
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
