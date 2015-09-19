@extends('app')

@section('title')
    Create subject
@stop

@section('content')
    <div class="cell cell--6 cell--center">
        <h1>Create subject</h1>
        {!! Form::open(['url' => 'groups/' . $groupId  . '/subjects'])!!}

        @include('subjects._form', ['buttonLabel' => 'Add subject'])

        {!! Form::close() !!}
    </div>
@stop
