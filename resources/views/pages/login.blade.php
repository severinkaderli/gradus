@extends('app')

@section('title')
    Login
@stop

@section('content')
    @include('errors._list')

    {!! Form::open(['url' => 'login'])!!}

        <!-- email Inputfield -->
        <div>
            {!! Form::email('email', null, ['id' => 'email']) !!}
            {!! Form::label('email', 'E-Mail') !!}
        </div>

        <!-- password Inputfield -->
        <div>
            {!! Form::password('password', ['id' => 'password']) !!}
            {!! Form::label('password', 'Passwort') !!}
        </div>

        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="remember">
            <input type="checkbox" name="remember" id="remember" class="mdl-checkbox__input" />
            <span class="mdl-checkbox__label">Remember Password</span>
        </label>

        <!-- login Submit Button -->
        <div>
            {!! Form::submit('Login', ['id' => 'login', 'name' => 'login']) !!}
        </div>

    {!! Form::close() !!}
@stop