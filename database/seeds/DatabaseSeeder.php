<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AddressesTableSeeder::Class);
        $this->call(ReviewsTableSeeder::Class);
    }
}
