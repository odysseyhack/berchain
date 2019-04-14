<?php

namespace App\Services;


use App\Candle;
use App\Coin;
use App\Events\User\WatcherTriggered;
use App\Period;
use App\User;
use App\Watcher;
use Illuminate\Support\Facades\Log;

class KpiCalcServices
{
    /*private $totalAmtCollected;

    public function __construct($totalAmtCollected)
    {
        $this->totalAmtCollected = $totalAmtCollected;
    }*/

    public function calcJobsPerHectare($amtDonated)
    {
        return 620;
    }

    public function calcTonsOfBiomass($amtDonated)
    {
        return 165;
    }

    public function calcReductionOfCo2($amtDonated)
    {
        return 47;
    }

}
