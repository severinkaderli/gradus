@extends('app')

@section('title')
    Create group
@stop

@section('content')
        <div class="cell cell--6 cell--center">
            <h1>Create group</h1>
            {!! Form::open(['url' => 'groups'])!!}


            <div class="input--group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['id' => 'name']) !!}
            </div>

            <div class="input--group">
                {!! Form::submit('Add group', ['id' => 'login', 'name' => 'addGroupSubmit']) !!}
            </div>

            {!! Form::close() !!}
        </div>
@stop
