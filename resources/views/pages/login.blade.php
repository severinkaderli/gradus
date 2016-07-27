@extends('app')

@section('title')
    Login
@stop

@section('content')
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--6-col mdl-cell--1-offset-tablet">
        <div class="mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Open-source grade manager</h2>
            </div>
            <div class="mdl-card__supporting-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>

    <div class="mdl-cell mdl-cell--6-col mdl-cell--1-offset-tablet">
        <div class="mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Login</h2>
            </div>
            <div class="mdl-card__supporting-text">
                {!! Form::open(['url' => 'login'])!!}


                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    {!! Form::email('email', null, ['id' => 'email', 'class' => 'mdl-textfield__input']) !!}
                    {!! Form::label('email', 'E-Mail', ['class' => 'mdl-textfield__label']) !!}
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    {!! Form::password('password', ['id' => 'password', 'class' => 'mdl-textfield__input']) !!}
                    {!! Form::label('password', 'Passwort', ['class' => 'mdl-textfield__label']) !!}
                </div>

                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="remember">

                    {!! Form::checkbox('remember', '', false, ['id' => 'remember', 'class' => 'mdl-checkbox__input']) !!}

                    <span class="mdl-checkbox__label">Remember password</span>
                </label>

                <div class="submit-button">
                    {!! Form::submit('Login', ['id' => 'login', 'name' => 'login', 'class' => 'mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored']) !!}
                    or <a href="{{url('/register')}}">create an account</a>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@stop
