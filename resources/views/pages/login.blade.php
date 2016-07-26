@extends('app')

@section('title')
    Login
@stop

@section('content')
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--6-col">
        <div class="mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Login</h2>
            </div>
            <div class="mdl-card__supporting-text">
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
                or <a href="{{url('/register')}}">create an account</a>
                </fieldset>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="mdl-cell mdl-cell--6-col">
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
</div>



@stop
