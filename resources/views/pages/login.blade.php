@extends('app')

@section('title')
    Login
@stop

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
  <h1 class="display-3">gradus</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="m-y-2">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
  </div>
</div>

<div class="container">
    <div class="col-sm-6">

        <h1 class="card-title">Login</h1>
        {!! Form::open(['url' => 'login'])!!}

        <fieldset class="form-group">
           
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
            or <a href="{{url('/register')}}">sign-up</a>
        </fieldset>

        {!! Form::close() !!}
    </div>
    <div class="col-sm-6">
        <h1>Open-source grade manager</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>

@stop