@extends('app')

@section('title')
    Create grade
@stop

@section('content')
    <div class="cell cell--6 cell--center">
        <h1>Create grade</h1>
        {!! Form::open(['url' => 'subjects/' . $subjectId  . '/grades'])!!}

        @include('grades._form')
        <div class="input--group">
            {!! Form::submit('Add grade', ['id' => 'login']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@stop
