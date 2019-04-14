@extends('layout')
@section('content')

    <h1>{{ $project->name }}</h1>
    <div id="projectIdData">{{$project->id}}</div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="transactions-tab" data-toggle="tab" href="#transactions" role="tab" aria-controls="transactions" aria-selected="true">Transactions</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="donators-tab" data-toggle="tab" href="#donators-panel" role="tab" aria-controls="donators" aria-selected="false">Donators</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="transactions" role="tabpanel" aria-labelledby="transactions-tab">
            <br/>
            <h3>Transactions</h3>
            @if(count($project->transactions))
                <table class="table">
                    <th>Amount</th>
                    <th>Currency</th>
                    <th>Project</th>
                    <th>Donator</th>
                    @foreach($project->transactions as $transaction)
                        <tr>
                            <td>{{ round($transaction->amount, 2) }}</td>
                            <td>{{ $transaction->coin->symbol }}</td>
                            <td><a href="/my-projects/{{ $transaction->project_id }}">{{ $transaction->project->name}}</a></td>
                            <td><a href="/donator/{{ $transaction->donator_id }}">{{ $transaction->donator->name}}</a></td>
                            <td>
                                <a href="/projects/{{ $transaction->id }}">more details</td>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @else
                <p>You don't currently have any donations registerd in the system</p>
            @endif

            <!-- Create a new transaction -->
            <div id="transaction"></div>
        </div>
        <div class="tab-pane fade" id="donators-panel" role="tabpanel" aria-labelledby="donators-tab">
            <br/>
            <h3>Badges (donors)</h3>
            @if(count($project->donators))
                <table class="table">
                    @foreach($project->donators as $badge)
                        <tr>
                            <td>
                                <a href="/projects/{{ $badge->id }}">{{ $badge->name }}</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @endif

        </div>
    </div>

    <br/>
    <br/>

    <div id="donators" style="display:none;">{{ json_encode($donators->toArray()) }}</div>
    <h3>Badges (donors)</h3>
    @if(count($project->donators))
        <table class="table">

        @foreach($project->donators as $badge)
            <tr>
                <td>
                    <a href="/projects/{{ $badge->id }}">{{ $badge->name }}</td>
                </td>
            </tr>
        @endforeach
        </table>
    @endif
    <div id="jobsPerHectareData"></div>
    <div id="biomassData"></div>
    <div id="forestData"></div>
    <div id="reductionData"></div>
    <div id="donators" style="display:none;">{{ json_encode($project->donators) }}</div>
@endsection
