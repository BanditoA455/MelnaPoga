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
            'productprice' => '10.55',
            ]);
    }
}


