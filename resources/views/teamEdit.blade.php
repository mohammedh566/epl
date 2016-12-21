@extends('master')
@section('title', 'Edit Team Details')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">

            <form class="form-horizontal" method="post">

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <fieldset>
                    <legend>Edit Teams</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Team Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="tname" name="teamName" value="{!! $team->tname !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Owner</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="owner" name="owner" value="{!! $team->owner !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Manager</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="manager" name="manager" value="{!! $team->manager !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection