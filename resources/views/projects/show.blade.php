@extends('layout')
@section('content')

    <h1>{{ $project->name }}</h1>

    <h3>Transactions</h3>
    @if(count($project->transactions))
        <table class="table">

            @foreach($project->transactions as $transaction)
                <tr>
                    <td>
                        <a href="/projects/{{ $transaction->id }}">{{ $transaction->name }}</td>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif

    <!-- Create a new transaction -->
    <div id="transaction"></div>

    <br/>
    <br/>
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

    <div id="donators" style="display:none;">{{ json_encode($project->donators) }}</div>
@endsection

