@extends('app')

@section('title')
    Create group
@stop

@section('content')
        <div class="cell cell--6 cell--center">
            <h1>Create group</h1>
            {!! Form::open(['url' => 'groups'])!!}

            @include('groups._form', ['buttonLabel' => 'Add group'])

            {!! Form::close() !!}
        </div>
@stop
