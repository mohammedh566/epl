@extends('master')
@section('title', 'Team Lists')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2> Teams </h2>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                @if ($teams->isEmpty())
                    <p> No teams registered.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Team Name</th>
                                <th>Owner</th>
                                <th>Manager</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teams as $team)
                                <tr>
                                    <td>{!! $team->id !!} </td>
                                    <td>
                                        <a href="{!! action('TeamsController@show', $team->id) !!}">{!! $team->tname !!} </a>
                                    </td>
                                    <td>{!! $team->owner !!}</td>
                                    <td>{!! $team->manager !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
    </div>

@endsection