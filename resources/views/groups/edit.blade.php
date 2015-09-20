@extends('app')

@section('title')
    Edit group
@stop

@section('content')
    <div class="cell cell--6 cell--center">
        <h1>Edit group</h1>
        {!! Form::model($group, ['method' => 'PATCH', 'action' => ['GroupController@update', $group->id]])!!}

        @include('groups._form')
        <div class="input--group">
            {!! Form::submit('Update group', ['id' => 'updateGroupSubmit']) !!}
            @if($group->archived == 0)
                <a class="form--button"
                   data-method="put"
                   data-confirm="Are you sure?"
                   href="{{url('groups/' . $group->id . '/archive')}}">Archive group</a>
            @else
                <a class="form--button"
                   data-method="put"
                   data-confirm="Are you sure?"
                   href="{{url('groups/' . $group->id . '/unarchive')}}">Unarchive group</a>
            @endif
            <a class="form--button"
               data-method="delete"
               data-confirm="Are you sure?"
               href="{{url('groups/' . $group->id)}}">Delete group</a>
        </div>
        {!! Form::close() !!}
    </div>
@stop

@section('bodyJS')
    <script src="{{URL::asset('js/rest_link.js')}}"></script>
@stop
