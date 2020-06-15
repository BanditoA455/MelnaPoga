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
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();



        //1
        $admin = User::create([
            'FirstName' => 'admin',
            'LastName' => 'admin',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => Hash::make('password')
        ]);
        //2
        $user = User::create([
            'FirstName' => 'user',
            'LastName' => 'user',
            'email' => 'user@user.com',
            'role' => 'user',
            'password' => Hash::make('password')
        ]);
        //3
        $admin = User::create([
            'FirstName' => 'Karlis',
            'LastName' => 'Oglins',
            'email' => 'karlis@karlis.com',
            'role' => 'admin',
            'password' => Hash::make('password')
        ]);
        //4
        $admin = User::create([
            'FirstName' => 'Alise',
            'LastName' => 'Petersone',
            'email' => 'alise.petersone@gmail.com',
            'role' => 'user',
            'password' => Hash::make('password')
        ]);
        //5
        $admin = User::create([
            'FirstName' => 'James',
            'LastName' => 'Bordon',
            'email' => 'james.bordon@outlook.com',
            'role' => 'user',
            'password' => Hash::make('password')
        ]);
        //6
        $admin = User::create([
            'FirstName' => 'Stephany',
            'LastName' => 'Spearhead',
            'email' => 'xStephanyx@phub.com',
            'role' => 'user',
            'password' => Hash::make('password')
        ]);
        //7
        $admin = User::create([
            'FirstName' => 'Felix',
            'LastName' => 'Kjelberg',
            'email' => 'best@everything.com',
            'role' => 'admin',
            'password' => Hash::make('password')
        ]);
        //8
        $admin = User::create([
            'FirstName' => 'Maria',
            'LastName' => 'Rodriguez',
            'email' => 'Maria@gemajle.komj',
            'role' => 'user',
            'password' => Hash::make('password')
        ]);
        //9
        $admin = User::create([
            'FirstName' => 'Daniel',
            'LastName' => 'McCarthy',
            'email' => 'damn@daniel.com',
            'role' => 'admin',
            'password' => Hash::make('password')
        ]);
        //10
        $admin = User::create([
            'FirstName' => 'Egor',
            'LastName' => 'Ivanovich',
            'email' => 'jegor@outbowl.ru',
            'role' => 'user',
            'password' => Hash::make('password')
        ]);
        //11
        $admin = User::create([
            'FirstName' => 'Emmanuel',
            'LastName' => 'Kazeem',
            'email' => 'eminemuel@gamil.com',
            'role' => 'user',
            'password' => Hash::make('password')
        ]);
    }
}
