<?php

namespace App\Transformers;


/**
 * Candle transfomer to the TradingView format
 */
class ProjectTransformer extends Transformer {

    /**
     * TradingViewTransformer constructor.
     */
    public function __construct()
    {

    }

    public function transform($project)
    {

        $filteredProject = [];

        $filteredProject['name'] =  $project->name;
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