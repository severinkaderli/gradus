@extends('app')

@section('title')
    Login
@stop

@section('content')
    <div class="col-sm-6 col-sm-offset-3">

        <h1 class="card-title">Login</h1>
        {!! Form::open(['url' => 'login'])!!}

        <fieldset class="form-group">
            {!! Form::label('email', 'E-Mail') !!}
            {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control']) !!}
        </fieldset>

        <fieldset class="form-group">
            {!! Form::label('password', 'Passwort') !!}
            {!! Form::password('password', ['id' => 'password', 'class' => 'form-control']) !!}
        </fieldset>

        <fieldset class="form-group">
            {!! Form::checkbox('remember', '', false, ['id' => 'remember']) !!}
            {!! Form::label('remember', 'Remember password') !!}
        </fieldset>

        <fieldset class="form-group">
            {!! Form::submit('Login', ['id' => 'login', 'name' => 'login', 'class' => 'btn btn-primary']) !!}
        </fieldset>

        {!! Form::close() !!}
    </div>

@stop