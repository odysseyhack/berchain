<?php

use App\Coin;
use App\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
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
        Project::insert(['name' => 'Project Masarang', 'user_id'=> 1]);
    }
}
