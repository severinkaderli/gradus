@extends('app')

@section('title')
    Register
@stop

@section('content')
    <div class="cell cell--6 cell--center">
        <h1>Register</h1>
        {!! Form::open(['url' => 'register'])!!}

            <div class="input--group">
                {!! Form::label('firstname', 'Vorname') !!}
                {!! Form::text('firstname', null, ['id' => 'firstname']) !!}
            </div>

            <div class="input--group">
                {!! Form::label('lastname', 'Name') !!}
                {!! Form::text('lastname', null, ['id' => 'lastname']) !!}
            </div>

            <div class="input--group">
                {!! Form::label('email', 'E-Mail') !!}
                {!! Form::email('email', null, ['id' => 'email']) !!}
            </div>

            <div class="input--group">
                {!! Form::label('password', 'Passwort') !!}
                {!! Form::password('password', ['id' => 'password']) !!}
            </div>

            <div class="input--group">
                {!! Form::label('password_confirmation', 'Passwort best&auml;tigen') !!}
                {!! Form::password('password_confirmation', ['id' => 'password_confirmation']) !!}
            </div>

            <div class="input--group">
                {!! Form::submit('Register', ['id' => 'register', 'name' => 'register']) !!}
            </div>

        {!! Form::close() !!}
    </div>
@stop