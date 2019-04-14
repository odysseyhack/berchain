<?php

use App\Coin;
use App\Donator;
use App\Kpi;
use App\Project;
use App\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
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
        Transaction::insert(['type' => 'manual', 'donator_id' => 1, 'coin_id' => 3, 'amount' => 10000, 'project_id' => 1, 'block_address' => '0x849deeb0ff3d7b89069ce4a96689b4e004bfc87226b26444baa0583d6893b745']);
        Transaction::insert(['type' => 'manual', 'donator_id' => 1, 'coin_id' => 3, 'amount' => 12000, 'project_id' => 1, 'block_address' => '0xe8e86cdbd0e0c77fbb4249ea25f8e6302fe2e80c60cf57475898e5c252324dea']);
        Transaction::insert(['type' => 'manual', 'donator_id' => 1, 'coin_id' => 3, 'amount' => 11000, 'project_id' => 1, 'block_address' => '0x03be8faeef1a65b33efcbfd256d64e99bba4d391a8ef73d20e4a543a83c42ed4']);
        Transaction::insert(['type' => 'manual', 'donator_id' => 1, 'coin_id' => 3, 'amount' => 10000, 'project_id' => 1, 'block_address' => '0x697e3ad8c2a426f6ec3f8182aac65ff6c0f21a550f56ce039a125869abdb4898']);
        Transaction::insert(['type' => 'manual', 'donator_id' => 1, 'coin_id' => 3, 'amount' => 15000, 'project_id' => 1, 'block_address' => '0xea7ff6f0d711605906feda5a73e58d5d464e74fa473f488aaf408d762e3cf71d']);
        Transaction::insert(['type' => 'manual', 'donator_id' => 1, 'coin_id' => 3, 'amount' => 12000, 'project_id' => 1, 'block_address' => '0x8bb3e809b8afde42c7f680f11f8effc258114615bb89011295a21e3794668436']);
        Transaction::insert(['type' => 'manual', 'donator_id' => 1, 'coin_id' => 3, 'amount' => 11000, 'project_id' => 1, 'block_address' => '0x8a2d90424ea234cfefc48f2026279dccc009ff8376d3d06ba286b1daac22cb37']);
        Transaction::insert(['type' => 'manual', 'donator_id' => 1, 'coin_id' => 3, 'amount' => 14000, 'project_id' => 1, 'block_address' => '0x99bc20998a3ca4b74cfed89929e3498698fbbbebb5043157aa942dc0ba1e581b']);
        Transaction::insert(['type' => 'manual', 'donator_id' => 1, 'coin_id' => 3, 'amount' => 14000, 'project_id' => 1, 'block_address' => '0x0df86315716d949f193a4928d1a52d121d8f8157e0815a2e0bca251d3a7304b8']);

    }
}
