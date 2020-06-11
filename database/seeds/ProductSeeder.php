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
        DB::table('products')->insert([
            'productname' => 'flat golden button',
            'procucttype' => 'flat',
            'productcolor' => 'golden',
            'productdiameter' => '14',
            'productprice' => '1.2',
            ]);

        DB::table('products')->insert([
            'productname' => 'silver lapel',
            'procucttype' => 'lapel',
            'productcolor' => 'silver',
            'productdiameter' => '10',
            'productprice' => '0.20',
            ]);

        DB::table('products')->insert([
            'productname' => 'shellac shank',
            'procucttype' => 'shank',
            'productcolor' => 'pink',
            'productdiameter' => '14',
            'productprice' => '0.54',
            ]);
        DB::table('products')->insert([
            'productname' => 'steel snap',
            'procucttype' => 'snap',
            'productcolor' => 'steel',
            'productdiameter' => '17',
            'productprice' => '0.30',
            ]);



    }
}


