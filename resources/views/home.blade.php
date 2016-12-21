@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @if (Auth::guest())
                <div class="panel-heading">Kindly Login!</div>
                @else
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body"><a href="/createTeam">Add new Team</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
