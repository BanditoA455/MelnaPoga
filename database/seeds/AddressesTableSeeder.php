<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->truncate();
        //1
        DB::table('addresses')->insert([
            'userID' => 1,
            'Country' => 'Latvia',
            'City' => 'Riga',
            'Street' => 'Matisa iela',
            'number' => '40',
        ]);
        //2
        DB::table('addresses')->insert([
            'userID' => '2',
            'Country' => 'Latvia',
            'City' => 'Cesis',
            'Street' => 'Raina iela',
            'number' => '14',
        ]);
        //3
        DB::table('addresses')->insert([
            'userID' => '3',
            'Country' => 'Latvia',
            'City' => 'Valmiera',
            'Street' => 'Blaumanu iela',
            'number' => '34',
        ]);
        //4
        DB::table('addresses')->insert([
            'userID' => '4',
            'Country' => 'Germany',
            'City' => 'Grob Koris',
            'Street' => 'Schmarjestrasse',
            'number' => '7',
        ]);
        //5
        DB::table('addresses')->insert([
            'userID' => '5',
            'Country' => 'USA',
            'City' => 'Walla Walla',
            'Street' => '3808  Calico Drive',
            'number' => '567',
        ]);
        //6
        DB::table('addresses')->insert([
            'userID' => '6',
            'Country' => 'USA',
            'City' => 'Melber',
            'Street' => '3917  Mount Tabor',
            'number' => '420',
        ]);
        //7
        DB::table('addresses')->insert([
            'userID' => '7',
            'Country' => 'Sweden',
            'City' => 'Kayl',
            'Street' => 'Rue Brucherberg, L-3614',
            'number' => '68',
        ]);
        //8
        DB::table('addresses')->insert([
            'userID' => '8',
            'Country' => 'Puerto Rico',
            'City' => 'Villa Caparra',
            'Street' => 'Calle Genova',
            'number' => '50',
        ]);
        //9
        DB::table('addresses')->insert([
            'userID' => '9',
            'Country' => 'New Zealand',
            'City' => 'Mangere South',
            'Street' => 'Putini Road',
            'number' => '43',
        ]);
        //10
        DB::table('addresses')->insert([
            'userID' => '10',
            'Country' => 'Kazahstan',
            'City' => 'Pavlodar',
            'Street' => 'Suvorova',
            'number' => '122',
        ]);
        //11
        DB::table('addresses')->insert([
            'userID' => '11',
            'Country' => 'Nigeria',
            'City' => 'Mushin',
            'Street' => 'Coker Road',
            'number' => '55',
        ]);
    }
}
