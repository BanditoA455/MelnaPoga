<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('products')->truncate();
        Schema::enableForeignKeyConstraints();
        //1
        DB::table('products')->insert([
            'productname' => 'black is back',
            'producttype' => 'flat',
            'productcolor' => 'black',
            'productdiameter' => '12',
            'productprice' => '1.2',
            ]);
        //2
        DB::table('products')->insert([
            'productname' => 'snow white',
            'producttype' => 'flat',
            'productcolor' => 'white',
            'productdiameter' => '16',
            'productprice' => '1.6',
            ]);
        //3
        DB::table('products')->insert([
            'productname' => 'bloodthirst',
            'producttype' => 'flat',
            'productcolor' => 'red',
            'productdiameter' => '14',
            'productprice' => '0.8',
            ]);
        //4
        DB::table('products')->insert([
            'productname' => 'blue monday',
            'producttype' => 'flat',
            'productcolor' => 'blue',
            'productdiameter' => '10',
            'productprice' => '0.6',
            ]);
        //5
        DB::table('products')->insert([
            'productname' => 'vegan joy',
            'producttype' => 'flat',
            'productcolor' => 'green',
            'productdiameter' => '13',
            'productprice' => '1.1',
            ]);
        //6
        DB::table('products')->insert([
            'productname' => 'Ag',
            'producttype' => 'lapel',
            'productcolor' => 'silver',
            'productdiameter' => '10',
            'productprice' => '3.20',
            ]);
        //7
        DB::table('products')->insert([
            'productname' => 'poppy',
            'producttype' => 'lapel',
            'productcolor' => 'red',
            'productdiameter' => '10',
            'productprice' => '3.20',
            ]);
        //8
        DB::table('products')->insert([
            'productname' => 'hello darkness',
            'producttype' => 'lapel',
            'productcolor' => 'black',
            'productdiameter' => '10',
            'productprice' => '5.20',
            ]);


         //9
        DB::table('products')->insert([
            'productname' => 'barbiegirl',
            'producttype' => 'shank',
            'productcolor' => 'pink',
            'productdiameter' => '12',
            'productprice' => '0.54',
            ]);
        //10
        DB::table('products')->insert([
            'productname' => 'alaska',
            'producttype' => 'snap',
            'productcolor' => 'steel',
            'productdiameter' => '17',
            'productprice' => '0.30',
            ]);
        //11
        DB::table('products')->insert([
            'productname' => 'chinatown',
            'producttype' => 'snap',
            'productcolor' => 'bronze',
            'productdiameter' => '8',
            'productprice' => '1.30',
            ]);
        //12
        DB::table('products')->insert([
            'productname' => 'gunpowder',
            'producttype' => 'shank',
            'productcolor' => 'gray',
            'productdiameter' => '9',
            'productprice' => '0.84',
            ]);
        //13
        DB::table('products')->insert([
            'productname' => 'sky emerald',
            'producttype' => 'shank',
            'productcolor' => 'blue',
            'productdiameter' => '9',
            'productprice' => '0.84',
            ]);
        //14
        DB::table('products')->insert([
            'productname' => 'pale oyster',
            'producttype' => 'snap',
            'productcolor' => 'white',
            'productdiameter' => '8',
            'productprice' => '1.20',
            ]);

         //15
        DB::table('products')->insert([
            'productname' => 'crimson lagoon',
            'producttype' => 'snap',
            'productcolor' => 'red',
            'productdiameter' => '12',
            'productprice' => '1.00',
            ]);





    }
}


