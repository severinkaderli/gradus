@extends('app')

@section('title')
    Edit group
@stop

@section('content')
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--6-col mdl-cell--3-offset-desktop mdl-cell--1-offset-tablet">
        <div class="mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Edit group</h2>
            </div>
            <div class="mdl-card__supporting-text">
                {!! Form::model($group, ['method' => 'PATCH', 'action' => ['GroupController@update', $group->id]])!!}

                    @include('groups._form')

                    <div class="submit-button">
                        {!! Form::submit('Update group', ['id' => 'updateGroupSubmit', 'class' => 'mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored']) !!}

                        @if($group->archived == 0)
                            <a class="form--button"
                               data-method="PATCH"
                               data-confirm="Are you sure?"
                               href="{{url('groups/' . $group->id . '/archive')}}">Archive group</a>
                        @else
                            <a class="form--button"
                               data-method="PATCH"
                               data-confirm="Are you sure?"
                               href="{{url('groups/' . $group->id . '/unarchive')}}">Unarchive group</a>
                        @endif
                        <a class="form--button"
                           data-method="DELETE"
                           data-confirm="Are you sure?"
                           href="{{url('groups/' . $group->id)}}">Delete group</a>

                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
