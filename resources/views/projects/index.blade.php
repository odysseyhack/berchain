@extends('layout')
@section('content')
    {{--@autocompletei="getPairs"--}}
    @if($projects)
        <table class="table">

        @foreach($projects as $project)
            <tr>
                <td>
                    <td><a href="/my-projects/{{ $project->id }}">{{ $project->name }}</td>
                </td>
            </tr>
        @endforeach
        </table>

    @else
        no projects
    @endif

@endsection
