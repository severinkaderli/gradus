@extends('app')

@section('title')
    Register
@stop

@section('content')
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--6-col mdl-cell--3-offset-desktop mdl-cell--1-offset-tablet">
        <div class="mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Register</h2>
            </div>
            <div class="mdl-card__supporting-text">
                {!! Form::open(['url' => 'register', 'id'=>'registerForm'])!!}
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        {!! Form::text('firstname', null, ['id' => 'firstname', 'class' => 'mdl-textfield__input']) !!}
                        {!! Form::label('firstname', 'Vorname', ['class' => 'mdl-textfield__label']) !!}
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        {!! Form::text('lastname', null, ['id' => 'lastname', 'class' => 'mdl-textfield__input']) !!}
                        {!! Form::label('lastname', 'Nachname', ['class' => 'mdl-textfield__label']) !!}
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        {!! Form::email('email', null, ['id' => 'email', 'class' => 'mdl-textfield__input']) !!}
                        {!! Form::label('email', 'E-Mail', ['class' => 'mdl-textfield__label']) !!}
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        {!! Form::password('password', ['id' => 'password', 'class' => 'mdl-textfield__input']) !!}
                        {!! Form::label('password', 'Passwort', ['class' => 'mdl-textfield__label']) !!}
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        {!! Form::password('password_confirmation', ['id' => 'password_confirmation', 'class' => 'mdl-textfield__input']) !!}
                        {!! Form::label('password_confirmation', 'Passwort bestätigen', ['class' => 'mdl-textfield__label']) !!}
                    </div>

                    <div class="submit-button">
                        {!! Form::submit('Login', ['id' => 'login', 'name' => 'register', 'class' => 'mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@stop
