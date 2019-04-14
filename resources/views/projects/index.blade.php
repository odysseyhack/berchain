@extends('layout')
@section('content')
    {{--@autocompletei="getPairs"--}}
    @if($projects)
        <h2>Your projects:</h2>
        <table class="table">
        @foreach($projects as $project)
            <tr>
                <td>
                <td><a href="/my-projects/{{ $project->id }}">{{ $project->name }}</td>
                <td><a href="/my-projects/{{ $project->id }}">view</a></td>
            </tr>
        @endforeach
        </table>

    @else
        no projects
    @endif
    <form method="POST" action="/my-projects">
        {{ csrf_field() }}
        <input type="hidden" name="coin_id" value="{{ 111 }}"/>
        <div className='form-group'>
            <label htmlFor='money'>Project name:</label>
            <input id='name'
                    type='text'
                    class='form-control'
                    name='name'
                    value=''
            />

        </div>
        <input type="submit" value="Create project"/>
    </form>

@endsection
