@extends('app')

@section('title')
    Edit subject
@stop

@section('content')
    <div class="cell cell--6 cell--center">
        <h1>Edit subject</h1>
        {!! Form::model($subject, ['method' => 'PATCH', 'action' => ['SubjectController@update', $subject->id]])!!}

            @include('subjects._form')
            <div class="input--group">
                {!! Form::submit("Update subject", ['id' => 'updateSubjectSubmit']) !!}
                <a class="form--button"
                   data-method="delete"
                   data-confirm="Are you sure?"
                   href="{{url('subjects/' . $subject->id)}}">Delete subject</a>
            </div>
        {!! Form::close() !!}
    </div>
@stop

@section('bodyJS')
    <script src="{{URL::asset('js/rest_link.js')}}"></script>
@stop
