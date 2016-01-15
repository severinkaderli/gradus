@extends('app')

@section('title')
    Register
@stop

@section('content')
    <div class="container">
        <h1>Register</h1>
        {!! Form::open(['url' => 'register', 'id'=>'registerForm'])!!}

            <fieldset class="form-group">
                <div class="col-md-3 text-md-right">
                    {!! Form::label('firstname', 'Vorname', ['class' => 'form-control-label']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::text('firstname', null, ['id' => 'firstname', 'class' => 'form-control']) !!}
                </div>
                <div class="col-md-5 text-danger form-control-label"></div>
            </fieldset>
            <fieldset class="form-group">
                <div class="col-md-3 text-md-right">
                    {!! Form::label('lastname', 'Name', ['class' => 'form-control-label']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::text('lastname', null, ['id' => 'lastname', 'class' => 'form-control']) !!}
                </div>
                <div class="col-md-5 text-danger form-control-label"></div> 
            </fieldset>

            <fieldset class="form-group">
                <div class="col-md-3 text-md-right">
                    {!! Form::label('email', 'E-Mail', ['class' => 'form-control-label']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control']) !!}
                </div>
                <div class="col-md-5 text-danger form-control-label"></div> 
            </fieldset>

            <fieldset class="form-group">
                <div class="col-md-3 text-md-right">
                     {!! Form::label('password', 'Passwort', ['class' => 'form-control-label']) !!}
                </div>
                <div class="col-md-4">
                     {!! Form::password('password', ['id' => 'password', 'class' => 'form-control']) !!}
                </div>
                <div class="col-md-5 form-control-label"></div>
            </fieldset>

            <fieldset class="form-group">
                <div class="col-md-3 text-md-right">
                     {!! Form::label('password_confirmation', 'Passwort best&auml;tigen', ['class' => 'form-control-label']) !!}
                </div>
                <div class="col-md-4">
                     {!! Form::password('password_confirmation', ['id' => 'password_confirmation', 'class' => 'form-control']) !!}
                </div>
                <div class="col-md-5 text-danger form-control-label"></div>
            </fieldset>

            <fieldset class="form-group">
                <div class="col-md-offset-3 col-md-4">
                    {!! Form::submit('Register', ['id' => 'register', 'name' => 'register', 'class' => 'btn btn-primary']) !!}
                </div>
            </fieldset>

        {!! Form::close() !!}
    </div>
@stop
@section('bodyJS')
  <script>

  var registerForm = $("#registerForm").validate({
    rules: {
        firstname: {
            required: true
        },
        lastname: {
            required: true
        },
        email: {
            email: true,
            required: true
        },
        password: {
            required: true
        }

    },
    messages: {
        firstname: {
            required: "Der Name wird benötigt."
        }
    },
    errorPlacement: function(error, element) {
        error.appendTo(element.parent("div").next("div"));
    },
    highlight: function(element) {
        $(element).addClass("form-control-danger");
        $(element).parents('fieldset').addClass('has-danger');
    },
    unhighlight: function(element) {
        $(element).removeClass("form-control-danger");
        $(element).parents('fieldset').removeClass('has-danger');
    },
    success: function(label, element) {
        $(element).addClass("form-control-success");
        $(element).parents('fieldset').addClass('has-success');
    }
  });

  if( $('meta[name=_error]').attr('content') == 1) {
    registerForm.form();
  }
  
  
  </script>

  
@stop