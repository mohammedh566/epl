@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @if (Auth::guest())
                <div class="panel-heading">Kindly Login!</div>
                @else
                <div class="panel-heading">Dashboard</div>
                 
                     <div class="panel-body">
                         <ul class="fa-ul">
                              <li><i class="fa-li fa fa-square"></i><a href="/createTeam">Add new Team</a></li>
                          </ul>
                    </div>
                     <div class="panel-body"> 
                         <ul class="fa-ul">
                             <li><i class="fa-li fa fa-square"></i><a href="{!! action('TeamsController@index') !!}">List of teams registered</a></li>
                          </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
<i class="fa-li fa fa-spinner fa-spin"></i>