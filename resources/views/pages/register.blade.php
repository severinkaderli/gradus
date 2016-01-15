@extends('app')

@section('title')
    Register
@stop

@section('content')
    <div class="container">
        <h1>Register</h1>
        {!! Form::open(['url' => 'register'])!!}

            <fieldset class="form-group">
                <div class="col-md-4 text-md-right">
                    {!! Form::label('firstname', 'Vorname', ['class' => 'form-control-label']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::text('firstname', null, ['id' => 'firstname', 'class' => 'form-control']) !!}
                </div>
                <div class="col-md-4 has-danger">
                {{$errors->first('firstname')}}
                </div>
            </fieldset>
            <fieldset class="form-group">
                <div class="col-md-4 text-md-right">
                    {!! Form::label('lastname', 'Name', ['class' => 'form-control-label']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::text('lastname', null, ['id' => 'lastname', 'class' => 'form-control']) !!}
                </div>
                <div class="col-md-4 has-danger">
                {{$errors->first('lastname')}}
                </div> 
            </fieldset>

            <fieldset class="form-group">
                <div class="col-md-4 text-md-right">
                    {!! Form::label('email', 'E-Mail', ['class' => 'form-control-label']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control']) !!}
                </div>
                <div class="col-md-4 has-danger">
                {{$errors->first('email')}}
                </div> 
            </fieldset>

            <fieldset class="form-group">
                <div class="col-md-4 text-md-right">
                     {!! Form::label('password', 'Passwort', ['class' => 'form-control-label']) !!}
                </div>
                <div class="col-md-4">
                     {!! Form::password('password', ['id' => 'password', 'class' => 'form-control']) !!}
                </div>
                <div class="col-md-4 has-danger">
                {{$errors->first('password')}}
                </div>
            </fieldset>

            <fieldset class="form-group">
                <div class="col-md-4 text-md-right">
                     {!! Form::label('password_confirmation', 'Passwort best&auml;tigen', ['class' => 'form-control-label']) !!}
                </div>
                <div class="col-md-4">
                     {!! Form::password('password_confirmation', ['id' => 'password_confirmation', 'class' => 'form-control']) !!}
                </div>
                <div class="col-md-4 has-danger">
                {{$errors->first('password_confirmation')}}
                </div>
            </fieldset>

            <fieldset class="form-group">
                <div class="col-md-offset-4 col-md-4">
                    {!! Form::submit('Register', ['id' => 'register', 'name' => 'register', 'class' => 'btn btn-primary']) !!}
                </div>
            </fieldset>

        {!! Form::close() !!}
    </div>
@stop