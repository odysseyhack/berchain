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

}