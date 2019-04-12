<?php

use App\Coin;
use Illuminate\Database\Seeder;

class CoinSymbolSeeder extends Seeder
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
        Coin::insert(['name' => 'Bitcoin', "symbol" => "BTC"]);
        Coin::insert(['name' => 'Ethereum', "symbol" => "ETH"]);
        Coin::insert(['name' => 'Dollars', "symbol" => "USD"]);
        Coin::insert(['name' => 'Euros', "symbol" => "EUR"]);
    }
}
