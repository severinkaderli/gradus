@extends('app')

@section('title')
    Edit grade
@stop

@section('content')
    <div class="cell cell--6 cell--center">
        <h1>Edit grade</h1>
        {!! Form::model($grade, ['method' => 'PATCH', 'action' => ['GradeController@update', $grade->id]])!!}

        @include('grades._form')
        <div class="input--group">
            {!! Form::submit('Update grade', ['id' => 'login']) !!}
            <a class="form--button"
               data-method="delete"
               data-confirm="Are you sure?"
               href="{{url('grades/' . $grade->id)}}">Delete grade</a>
        </div>
        {!! Form::close() !!}
    </div>
@stop

@section('bodyJS')
    <script src="{{URL::asset('js/rest_link.js')}}"></script>
@stop
