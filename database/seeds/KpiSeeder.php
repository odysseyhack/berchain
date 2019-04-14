<?php

use App\Coin;
use App\Kpi;
use App\Project;
use Illuminate\Database\Seeder;

class KpiSeeder extends Seeder
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
        Kpi::insert(['name' => 'Kpi 1', 'project_id' => 1, 'data' => '{x: 12, y: 15}']);
        Kpi::insert(['name' => 'Kpi 2', 'project_id' => 1, 'data' => '{x: 12, y: 15}']);
        Kpi::insert(['name' => 'Kpi 3', 'project_id' => 1, 'data' => '{x: 12, y: 15}']);
    }
}
