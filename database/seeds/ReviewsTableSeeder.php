<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->truncate();

        //1
        DB::table('reviews')->insert([
            'userID' => '4',
            'productID' => '3',
            'review' => 'OMG! Just wow these buttons are amazing. I mean they just look so cool on me.',
            'rating' => '10'
        ]);
        //2
        DB::table('reviews')->insert([
            'userID' => '2',
            'productID' => '9',
            'review' => 'yes',
            'rating' => '6.9'
        ]);
        //3
        DB::table('reviews')->insert([
            'userID' => '2',
            'productID' => '11',
            'review' => 'A button is a button.',
            'rating' => '6'
        ]);
        //4
        DB::table('reviews')->insert([
            'userID' => '7',
            'productID' => '7',
            'review' => 'This button is quite unique, I reckon that every gentleman shoul consider buying one. ONly complain is that it could have been a little bit bigger',
            'rating' => '8'
        ]);
        //5
        DB::table('reviews')->insert([
            'userID' => '10',
            'productID' => '1',
            'review' => 'Gut kvalitee. I rait it soven ut uf tan',
            'rating' => '6'
        ]);
        //6
        DB::table('reviews')->insert([
            'userID' => '10',
            'productID' => '5',
            'review' => 'Gud',
            'rating' => '8'
        ]);
        //7
        DB::table('reviews')->insert([
            'userID' => '11',
            'productID' => '9',
            'review' => 'i bought these buttons thinking that they atract barbie girls, but instead everyone just laughed at me and called me a barbie girl. The name is misleading',
            'rating' => '7'
        ]);
        //8
        DB::table('reviews')->insert([
            'userID' => '9',
            'productID' => '13',
            'review' => 'This is a review',
            'rating' => '5.7'
        ]);
        //9
        DB::table('reviews')->insert([
            'userID' => '7',
            'productID' => '1',
            'review' => 'I would have to agree with Egor. They are simple and plain buttons, but they are quite exquisite',
            'rating' => '8.35'
        ]);
        //10
        DB::table('reviews')->insert([
            'userID' => '11',
            'productID' => '11',
            'review' => 'Yes they are not half bad',
            'rating' => '7.77'
        ]);
        //11
        DB::table('reviews')->insert([
            'userID' => '2',
            'productID' => '1',
            'review' => 'Um guys how do I change my user name. Hey are you that pewdiepie guy',
            'rating' => '1'
        ]);
        //12
        DB::table('reviews')->insert([
            'userID' => '7',
            'productID' => '1',
            'review' => 'Yes i am that "pewdiepie" guy and regarding your question I dont think that the developers have added a functionality for that.',
            'rating' => '8'
        ]);
        //13
        DB::table('reviews')->insert([
            'userID' => '4',
            'productID' => '2',
            'review' => 'My review.',
            'rating' => '4'
        ]);
        //14
        DB::table('reviews')->insert([
            'userID' => '6',
            'productID' => '10',
            'review' => 'LMAO, they are so ugly, like who would even buy them. Like you have to be a degenerate to buy them.',
            'rating' => '0.01'
        ]);
        //15
        DB::table('reviews')->insert([
            'userID' => '1',
            'productID' => '1',
            'review' => 'Hey if you guys wish to change your username or your address than you have to contact us using the information from the support page',
            'rating' => '10'
        ]);

    }
}
