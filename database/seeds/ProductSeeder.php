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
        DB::table('products')->insert([
            'productname' => 'flat golden button',
            'producttype' => 'flat',
            'productcolor' => 'golden',
            'productdiameter' => '14',
            'productprice' => '1.2',
            ]);

        DB::table('products')->insert([
            'productname' => 'silver lapel',
            'producttype' => 'lapel',
            'productcolor' => 'silver',
            'productdiameter' => '10',
            'productprice' => '0.20',
            ]);

        DB::table('products')->insert([
            'productname' => 'shellac shank',
            'producttype' => 'shank',
            'productcolor' => 'pink',
            'productdiameter' => '14',
            'productprice' => '0.54',
            ]);
        DB::table('products')->insert([
            'productname' => 'steel snap',
            'producttype' => 'snap',
            'productcolor' => 'steel',
            'productdiameter' => '17',
            'productprice' => '0.30',
            ]);



    }
}


