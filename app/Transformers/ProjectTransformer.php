<?php

namespace App\Transformers;


use App\Services\KpiCalcServices;

/**
 * Candle transfomer to the TradingView format
 */
class ProjectTransformer extends Transformer {
    /**
     * @var KpiCalcServices
     */
    private $kpiCalcServices;

    /**
     * TradingViewTransformer constructor.
     * @param KpiCalcServices $kpiCalcServices
     */
    public function __construct(KpiCalcServices $kpiCalcServices)
    {
        $this->kpiCalcServices = $kpiCalcServices;
    }

    public function transform($project)
    {

        $project->load('transactions');

        $totalDonated = $project->transactions->sum('amount');

        $filteredProject = [];

        $filteredProject['name'] =  $project->name;
        $filteredProject['total_donated'] = number_format($totalDonated, 2);
        $filteredProject['jobs_per_hectare'] = $this->kpiCalcServices->calcJobsPerHectare($totalDonated);
        $filteredProject['tons_of_biomass'] = $this->kpiCalcServices->calcTonsOfBiomass($totalDonated);
        $filteredProject['reduction_of_co2'] = $this->kpiCalcServices->calcReductionOfCo2($totalDonated);
        setlocale(LC_MONETARY, 'en_US');
        $transactions = [];

        foreach($project->transactions as $transaction) {
            $newTransaction = $transaction->toArray();
            //$newTransaction['amount'] = number_format((float)$newTransaction['amount'], 2, '.', '');
            //$newTransaction['amount'] = money_format('%i', $newTransaction['amount']);
            $newTransaction['amount'] = number_format($newTransaction['amount'], 2);
            $transactions[] = $newTransaction;
        }

        $filteredProject['transactions'] = $transactions;

        if(count($project->kpis)) {
            $filteredProject['kpis'] = [];

            foreach($project->kpis as $kpi) {
                $kpiArray = [];
                $kpiArray['data'] = $kpi->data;
                $kpiArray['name'] = $kpi->name;

                $filteredProject['kpis'][] = $kpiArray;
            }


        }

        return $filteredProject;

    }
    /**
     *  [
            1504541580000, // UTC timestamp in milliseconds, integer
            4235.4,        // (O)pen price, float
            4240.6,        // (H)ighest price, float
            4230.0,        // (L)owest price, float
            4230.7,        // (C)losing price, float
            37.72941911    // (V)olume (in terms of the base currency), float
        ],
     * @param $item
     * @return array
     */
    public function breakoutTransform($candles)
    {
        foreach($candles as $candle)
        {
            //dd($candle);
            $tvObj["t"][] = (int)substr($candle[0], 0, 10);
            $tvObj["o"][] = $candle[1];
            $tvObj["h"][] = $candle[2];
            $tvObj["l"][] = $candle[3];
            $tvObj["c"][] = $candle[4];
            $tvObj["v"][] = $candle[5];
            //$tvObj["v"][] = 17822880;
            /*   $tvObj["v"][] = $candle[5];*/
        }
        $tvObj["s"] = "ok";
        $tvObj["noData"] = true;
        return $tvObj;
    }
}