<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $admin = User::create([
            'FirstName' => 'admin',
            'LastName' => 'admin',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => Hash::make('password')
        ]);
        $user = User::create([
            'FirstName' => 'user',
            'LastName' => 'user',
            'email' => 'user@user.com',
            'role' => 'user',
            'password' => Hash::make('password')
        ]);
    }
}
