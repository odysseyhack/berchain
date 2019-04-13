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

    <h3>Create a new transaction</h3>
    <div id="transaction"></div>

    <h3>Badges</h3>
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


@endsection
