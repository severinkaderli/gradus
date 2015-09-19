@extends('app')

@section('title')
    Login
@stop

@section('content')
    @include('errors._list')
    <div class="cell cell--6 cell--center">
        <h1>Login</h1>
        {!! Form::open(['url' => 'login'])!!}

        <div class="input--group">
            {!! Form::label('email', 'E-Mail') !!}
            {!! Form::email('email', null, ['id' => 'email']) !!}
        </div>

        <div class="input--group">
            {!! Form::label('password', 'Passwort') !!}
            {!! Form::password('password', ['id' => 'password']) !!}
        </div>

        <div class="input--group">
            {!! Form::checkbox('remember', '', false, ['id' => 'remember']) !!}
            {!! Form::label('remember', 'Remember password') !!}
        </div>

        <div class="input--group">
            {!! Form::submit('Login', ['id' => 'login', 'name' => 'login']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@stop