@extends('master')
@section('title', 'Register New Team')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
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
                    <legend>Register a new team</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Team Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="tname" placeholder="Team Name" name="teamName">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="owner" class="col-lg-2 control-label">Owner</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="owner" placeholder="Owner" name="owner">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="manager" class="col-lg-2 control-label">Manager</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="manager" placeholder="Manager" name="manager">
                        </div>
                    </div>
                    {!! Form::open( array(
                                        'route' => 'upload', 
                                        'class' => 'form-group', 
                                        'novalidate' => 'novalidate', 
                                            'files' => true)) !!}
                        <div class="form-group">
                            <div class="col-lg-2 control-label">
                                {!! Form::label('Upload Logo',null) !!}
                            </div>
                                {!! Form::file('image', ['class' => 'col-lg-4 btn btn-success']) !!}
                           
                        </div>
                    {!! Form::close() !!}
                  <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-info">Clear all</button>
                            <a href="/home" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection