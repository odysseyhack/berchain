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
        $this->call(CoinSymbolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(KpiSeeder::class);
        $this->call(DonatorSeeder::class);
        $this->call(TransactionSeeder::class);

    }
}
