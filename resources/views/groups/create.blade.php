@extends('app')

@section('title')
    Create group
@stop

@section('content')
        <div class="cell cell--6 cell--center">
            <h1>Create group</h1>
            {!! Form::open(['url' => 'groups'])!!}

            @include('groups._form')
            <div class="input--group">
                {!! Form::submit('Add group', ['id' => 'createGroupSubmit']) !!}
            </div>
            {!! Form::close() !!}
        </div>
@stop
