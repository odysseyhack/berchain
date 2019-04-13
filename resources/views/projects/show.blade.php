@extends('layout')
@section('content')

    <h1>{{ $project->name }}</h1>

    <h3>Transactions</h3>
    @if(count($project->transactions))
        <table class="table">

            @foreach($project->transactions as $transaction)
                <td>
                    <a href="/projects/{{ $transaction->id }}">{{ $transaction->name }}</td>
                </td>
            @endforeach
        </table>
    @endif

    <h3>Badges</h3>
    @if(count($project->donators))
        <table class="table">

        @foreach($project->donators as $badge)
            <td>
                <a href="/projects/{{ $badge->id }}">{{ $badge->name }}</td>
            </td>
        @endforeach
        </table>
    @endif


@endsection
