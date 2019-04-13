@extends('layout')
@section('content')
    {{--@autocompletei="getPairs"--}}
    @if($projects)
        <table class="table">

        @foreach($projects as $project)
            <td>
                <td><a href="/my-projects/{{ $project->id }}">{{ $project->name }}</td>
            </td>
        @endforeach
        </table>

    @else
        no projects
    @endif

@endsection
