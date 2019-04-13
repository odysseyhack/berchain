<?php

use App\Coin;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    //use DataCcxt;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //10 on server
        User::insert(['name' => 'James', "email" => "james@james.com", "password" => "***"]);
        User::insert(['name' => 'Bugs Bunny', "email" => "bugs@james.com", "password" => "***"]);
        User::insert(['name' => 'Mickey Mouse', "email" => "Mick@james.com", "password" => "***"]);
    }
}
