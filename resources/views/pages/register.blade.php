@extends('app')

@section('title')
    Register
@stop

@section('content')

    @include('errors._list')
    {!! Form::open(['url' => 'register'])!!}

            <!-- firstname Textfield-->
        <div>
            {!! Form::text('firstname', null, ['id' => 'firstname']) !!}
            {!! Form::label('firstname', 'Vorname') !!}
        </div>

        <!-- lastname Textfield-->
        <div>
            {!! Form::text('lastname', null, ['id' => 'lastname']) !!}
            {!! Form::label('lastname', 'Name') !!}
        </div>

        <!-- email Textfield-->
        <div>
            {!! Form::email('email', null, ['id' => 'email']) !!}
            {!! Form::label('email', 'E-Mail') !!}
        </div>

        <!-- password Textfield-->
        <div>
            {!! Form::password('password', ['id' => 'password']) !!}
            {!! Form::label('password', 'Passwort') !!}
        </div>

        <!-- password_confirmation Textfield-->
        <div>
            {!! Form::password('password_confirmation', ['id' => 'password_confirmation']) !!}
            {!! Form::label('password_confirmation', 'Passwortbestätigen') !!}
        </div>

        <!-- register Submit Button -->
        <div>
            {!! Form::submit('Register', ['id' => 'register', 'name' => 'register']) !!}
        </div>
    {!! Form::close() !!}
@stop