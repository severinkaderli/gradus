@extends('app')

@section('title')
    Edit group
@stop

@section('content')
    <div class="cell cell--6 cell--center">
        <h1>Edit group</h1>
        {!! Form::model($group, ['method' => 'PATCH', 'action' => ['GroupController@update', $group->id]])!!}

        @include('groups._form', ['buttonLabel' => 'Update group'])
        <a class="btn inline" data-method="delete" data-confirm="Are you sure?" href="{{url('groups/' . $group->id)}}">Delete group</a>
        {!! Form::close() !!}
    </div>
@stop

@section('bodyJS')
    <script src="{{URL::asset('js/rest_link.js')}}"></script>
@stop