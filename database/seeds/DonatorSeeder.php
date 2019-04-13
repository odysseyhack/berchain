<?php

use App\Coin;
use App\Donator;
use App\Kpi;
use App\Project;
use Illuminate\Database\Seeder;

class DonatorSeeder extends Seeder
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
        Donator::insert(['name' => 'Johnny Investor 1', 'project_id' => 1, 'email' => 'jonny@investington.com']);
        Donator::insert(['name' => 'Johnny Investor 2', 'project_id' => 1, 'email' => 'jonny@investington.com']);
        Donator::insert(['name' => 'Johnny Investor 3', 'project_id' => 1, 'email' => 'jonny@investington.com']);
        Donator::insert(['name' => 'Johnny Investor 4', 'project_id' => 1, 'email' => 'jonny@investington.com']);
        Donator::insert(['name' => 'Johnny Investor 5', 'project_id' => 1, 'email' => 'jonny@investington.com']);
    }
}
