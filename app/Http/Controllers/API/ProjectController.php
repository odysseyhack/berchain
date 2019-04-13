<?php

namespace App\Http\Controllers\API;

use App\Coin;
use App\Events\User\TradeAdvice;
use App\Exchange;
use App\ExchangeCoin;
use App\Http\Controllers\ApiController;
use App\Period;
use App\Services\StrategyService;
use App\Services\WatcherService;
use App\Strategy;
use App\Transaction;
use App\Transformers\ProjectTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProjectController extends ApiController {

    /**
     * @param Request $request
     * @param WatcherService $watcherService
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $project = Project::find($id);

        return response()->json(['success' => true, 'project' => $project]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createDonation(Request $request)
    {
        $kpis = [];

        $kpis['jobsPerHectare'] = 34;
        $kpis['tonsOfBiomass'] = 72;
        $kpis['reductionOfCo2'] = 23;

        return response()->json(['success' => true, 'kpis' => $kpis]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveDonation(Request $request)
    {
        try {
            Transaction::create([
                'type' => 'manual',
                'amount' => $request->get('amount'),
                'donator_id' => $request->get('donorId')
            ]);
            $success = true;
        }
        catch(\Exception $exception) {
            $success = false;
            $message = $exception->getMessage();
        }

        return response()->json(['success' => $success, $message => $message ]);


    }

}