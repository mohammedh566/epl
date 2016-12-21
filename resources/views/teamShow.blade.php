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
                <a href="#" class="btn btn-info">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </div>
    </div>

@endsection