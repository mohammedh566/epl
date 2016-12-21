@extends('master')
@section('title', 'View a Team')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                <div class="content">
                    <h2 class="header">{!! $team->tname !!}</h2>
                    <p> Owner: {!! $team->owner  !!}</p>
                    <p> Manager: {!! $team->manager  !!}</p>
                </div>
                <a href="{!! action('TeamsController@edit', $team->id) !!}" class="btn btn-info">Edit</a>
                <form method="post" action="{!! action('TeamsController@destroy', $team->id) !!}" class="pull-left">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div>
                        <button type="submit" class="btn btn-warning">Delete</button>
                    </div>
                </form>
                <div class="clearfix"></div>
             </div>
    </div>

@endsection